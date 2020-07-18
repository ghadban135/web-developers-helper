import React, { useEffect } from 'react';
import PropTypes from 'prop-types';
import { makeStyles } from '@material-ui/core/styles';
import AppBar from '@material-ui/core/AppBar';
import Tabs from '@material-ui/core/Tabs';
import Tab from '@material-ui/core/Tab';
import Typography from '@material-ui/core/Typography';
import Box from '@material-ui/core/Box';
import Page from '../components/page';
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

export default function PrograminLanguage() {
	const classes = useStyles();
	const [value, setValue] = React.useState(0);
	const [subTitles, setSubTitles] = React.useState([]);
	const [php, setPhp] = React.useState([]);
	const [javaScript, setJavaScript] = React.useState([]);
	const [python, setPython] = React.useState([]);
	const [java, setJava] = React.useState([]);
	const [rust, setRust] = React.useState([]);
	useEffect(() => {
		getSubCategory(2).then(function (result) {
			setSubTitles(result);
		});
		getContent(9).then(function (result) {
			setPhp(result);
		});
		getContent(10).then(function (result) {
			setJavaScript(result);
		});
		getContent(11).then(function (result) {
			setPython(result);
		});
		getContent(12).then(function (result) {
			setJava(result);
		});
		getContent(13).then(function (result) {
			setRust(result);
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
				<Page content={php} />
			</TabPanel>
			<TabPanel value={value} index={1}>
				<Page content={javaScript} />
			</TabPanel>
			<TabPanel value={value} index={2}>
				<Page content={python} />
			</TabPanel>
			<TabPanel value={value} index={3}>
				<Page content={java} />
			</TabPanel>
			<TabPanel value={value} index={4}>
				<Page content={rust} />
			</TabPanel>
			<TabPanel value={value} index={5}>
				<Page />
			</TabPanel>
			<TabPanel value={value} index={6}>
				<Page />
			</TabPanel>
		</div>
	);
}
