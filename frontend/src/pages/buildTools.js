import React, { useEffect } from 'react';
import PropTypes from 'prop-types';
import { makeStyles } from '@material-ui/core/styles';
import AppBar from '@material-ui/core/AppBar';
import Tabs from '@material-ui/core/Tabs';
import Tab from '@material-ui/core/Tab';
import Typography from '@material-ui/core/Typography';
import Box from '@material-ui/core/Box';
import { getSubCategory, getContent, check } from '../api/getContent';
import ItemList from '../components/itemList';

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

export default function BuildTools() {
	const classes = useStyles();
	const [value, setValue] = React.useState(0);
	const [subTitles, setSubTitles] = React.useState([]);
	const [npm, setNpm] = React.useState([]);
	const [yarn, setYarn] = React.useState([]);
	const [docker, setDocker] = React.useState([]);
	const [ssh, setSsh] = React.useState([]);
	const [isLogin, setIsLogin] = React.useState('');
	useEffect(() => {
		check().then(function (result) {
			setIsLogin(result);
		});
		getSubCategory(5).then(function (result) {
			setSubTitles(result);
		});
		getContent(20).then(function (result) {
			setNpm(result);
		});
		getContent(21).then(function (result) {
			setYarn(result);
		});
		getContent(22).then(function (result) {
			setDocker(result);
		});
		getContent(23).then(function (result) {
			setSsh(result);
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
				<ItemList content={npm} isLogin={isLogin} />
			</TabPanel>
			<TabPanel value={value} index={1}>
				<ItemList content={yarn} isLogin={isLogin} />
			</TabPanel>
			<TabPanel value={value} index={2}>
				<ItemList content={docker} isLogin={isLogin} />
			</TabPanel>
			<TabPanel value={value} index={3}>
				<ItemList content={ssh} isLogin={isLogin} />
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
