import React, { useEffect } from 'react';
import PropTypes from 'prop-types';
import { makeStyles } from '@material-ui/core/styles';
import AppBar from '@material-ui/core/AppBar';
import Tabs from '@material-ui/core/Tabs';
import Tab from '@material-ui/core/Tab';
import Typography from '@material-ui/core/Typography';
import Box from '@material-ui/core/Box';
import ItemList from '../components/itemList';
import { getSubCategory, getContent } from '../api/getContent';

function TabPanel(props) {
	const { children, value, index, ...other } = props;

	return (
		<div
			role='tabpanel'
			hidden={value !== index}
			id={`scrollable-auto-tabpanel-${index}`}
			aria-labelledby={`scrollable-auto-tab-${index}`}
			{...other}
		>
			{value === index && (
				<Box p={3}>
					<Typography>{children}</Typography>
				</Box>
			)}
		</div>
	);
}

TabPanel.propTypes = {
	children: PropTypes.node,
	index: PropTypes.any.isRequired,
	value: PropTypes.any.isRequired,
};

function a11yProps(index) {
	return {
		id: `scrollable-auto-tab-${index}`,
		'aria-controls': `scrollable-auto-tabpanel-${index}`,
	};
}

const useStyles = makeStyles((theme) => ({
	root: {
		flexGrow: 1,
		width: '100%',
		backgroundColor: theme.palette.background.paper,
		marginTop: '7vh',
	},
}));

export default function Database() {
	const classes = useStyles();
	const [value, setValue] = React.useState(0);
	const [subTitles, setSubTitles] = React.useState([]);
	const [mysql, setMysql] = React.useState([]);
	const [postgre, setPostgre] = React.useState([]);
	const [mongodb, setMongodb] = React.useState([]);
	useEffect(() => {
		getSubCategory(3).then(function (result) {
			setSubTitles(result);
		});
		getContent(14).then(function (result) {
			setMysql(result);
		});
		getContent(15).then(function (result) {
			setPostgre(result);
		});
		getContent(16).then(function (result) {
			setMongodb(result);
		});
	}, []);

	const handleChange = (event, newValue) => {
		setValue(newValue);
	};

	return (
		<div className={classes.root}>
			<AppBar position='static' color='default' style={{ display: 'grid' }}>
				<Tabs
					value={value}
					onChange={handleChange}
					indicatorColor='primary'
					textColor='primary'
					variant='scrollable'
					scrollButtons='on'
					aria-label='scrollable auto tabs example'
					// centered
				>
					{subTitles.map((text, index) => (
						<Tab label={text} {...a11yProps(index)} />
					))}
				</Tabs>
			</AppBar>
			<TabPanel value={value} index={0}>
				<ItemList content={mysql} />
			</TabPanel>
			<TabPanel value={value} index={1}>
				<ItemList content={postgre} />
			</TabPanel>
			<TabPanel value={value} index={2}>
				<ItemList content={mongodb} />
			</TabPanel>
			<TabPanel value={value} index={3}>
				<ItemList />
			</TabPanel>
			<TabPanel value={value} index={4}>
				<ItemList />
			</TabPanel>
			<TabPanel value={value} index={5}>
				<ItemList />
			</TabPanel>
			<TabPanel value={value} index={6}>
				<ItemList />
			</TabPanel>
		</div>
	);
}
