import React, { useState, useEffect } from 'react';
import { makeStyles, fade } from '@material-ui/core/styles';
import Drawer from '@material-ui/core/Drawer';
import CssBaseline from '@material-ui/core/CssBaseline';
import AppBar from '@material-ui/core/AppBar';
import Toolbar from '@material-ui/core/Toolbar';
import List from '@material-ui/core/List';
import Typography from '@material-ui/core/Typography';
import Divider from '@material-ui/core/Divider';
import ListItem from '@material-ui/core/ListItem';
import ListItemText from '@material-ui/core/ListItemText';
import InputBase from '@material-ui/core/InputBase';
import SearchIcon from '@material-ui/icons/Search';
import { Button } from '@material-ui/core';
import Welcome from './home';
import FrontEnd from '../pages/frontend';
import Backend from '../pages/backend';
import BuildTools from '../pages/buildTools';
import Database from '../pages/database';
import MobileApp from '../pages/mobileApp';
import TeamCollabration from '../pages/teamCollaboration';
import Testing from '../pages/testing';
import PrograminLanguage from '../pages/programingLanguage';
import Dialog from '@material-ui/core/Dialog';
import DialogActions from '@material-ui/core/DialogActions';
import DialogContent from '@material-ui/core/DialogContent';
import DialogContentText from '@material-ui/core/DialogContentText';
import DialogTitle from '@material-ui/core/DialogTitle';
import TextField from '@material-ui/core/TextField';
import Swal from 'sweetalert2';
import axios from 'axios';
import { check } from '../api/getContent';

export default function PermanentDrawerLeft(props) {
	const classes = useStyles();
	let titles = [
		'Front-end',
		'Back-end',
		'Programing Language',
		'Database',
		'Team Collaboration',
		'Build Tools',
		'Mobile App',
		'Testing',
	];

	const [value, setValue] = useState('home');
	const [open, setOpen] = React.useState(false);
	const [email, setEmail] = useState('');
	const [password, setPassword] = useState('');
	const [isLogin, setIsLogin] = React.useState('');

	const handleClickOpen = () => {
		setOpen(true);
	};

	const handleClose = () => {
		setOpen(false);
	};
	const onSubmit = async (e) => {
		// e.preventDefault();
		const body = new FormData();
		body.append('email', email);
		body.append('password', password);
		const response = await fetch(`http://localhost:8000/api/login`, {
			method: 'POST',
			body,
		});

		const result = await response.json();
		console.log(result);
		setEmail('');
		setPassword('');
		handleClose();
		if (result.access_token) {
			localStorage.setItem('token', result.access_token);
			const Toast = Swal.mixin({
				toast: true,
				position: 'bottom-end',
				showConfirmButton: false,
				timer: 3000,
				timerProgressBar: true,
				onOpen: (toast) => {
					toast.addEventListener('mouseenter', Swal.stopTimer);
					toast.addEventListener('mouseleave', Swal.resumeTimer);
				},
			});

			Toast.fire({
				icon: 'success',
				title: 'Signed in successfully',
			});
			setIsLogin(true);
		} else {
			Swal.fire('Cancelled', ' Invalid Email or password.', 'error');
		}
	};
	const handleLogOut = async () => {
		const response = await fetch(`http://localhost:8000/api/logout`, {
			method: 'POST',
			headers: {
				Authorization: `Bearer ${localStorage.token}`,
			},
		});
		setIsLogin(false);
	};
	useEffect(() => {
		check().then(function (result) {
			console.log(result);
			setIsLogin(result);
		});
	}, []);

	return (
		<div className={classes.root}>
			<CssBaseline />
			<AppBar position='fixed' className={classes.appBar}>
				<Toolbar>
					<Typography variant='h6' noWrap className={classes.title}>
						Web Developer Helper
					</Typography>
					<div className={classes.search}>
						<div className={classes.searchIcon}>
							<SearchIcon />
						</div>
						<InputBase
							placeholder='Search…'
							classes={{
								root: classes.inputRoot,
								input: classes.inputInput,
							}}
							inputProps={{ 'aria-label': 'search' }}
						/>
					</div>
					{!isLogin ? (
						<Button color='inherit' onClick={handleClickOpen}>
							Login
						</Button>
					) : (
						<Button color='inherit' onClick={handleLogOut}>
							Logout
						</Button>
					)}
				</Toolbar>
			</AppBar>
			<Drawer
				className={classes.drawer}
				variant='permanent'
				classes={{
					paper: classes.drawerPaper,
				}}
				anchor='left'
			>
				<div className={classes.toolbar} />
				<Divider />
				<List>
					{titles.map((text, index) => (
						<ListItem
							button
							key={text}
							{...props}
							onClick={() => setValue('title' + index)}
						>
							<ListItemText primary={text} />
						</ListItem>
					))}
				</List>
			</Drawer>
			<main className={classes.content}>
				<Tabswitch value={value} match={props.match} />
			</main>
			<Dialog
				fullWidth={true}
				maxWidth={'xs'}
				open={open}
				onClose={handleClose}
				aria-labelledby='form-dialog-title'
			>
				<DialogTitle id='form-dialog-title' style={{ textAlign: 'center' }}>
					Login Form
				</DialogTitle>
				<DialogContent>
					<DialogContentText style={{ textAlign: 'center' }}>
						Login to add comment or a rating to a specific link
					</DialogContentText>
					<TextField
						autoFocus
						margin='dense'
						label='Email Address'
						type='email'
						name='email'
						value={email}
						onChange={(e) => setEmail(e.target.value)}
						fullWidth
					/>
					<TextField
						margin='dense'
						label='Password'
						type='password'
						name='password'
						value={password}
						onChange={(e) => setPassword(e.target.value)}
						fullWidth
					/>
				</DialogContent>
				<DialogActions>
					<Button onClick={handleClose} color='primary'>
						Cancel
					</Button>
					<Button onClick={onSubmit} color='primary'>
						Login
					</Button>
				</DialogActions>
			</Dialog>
		</div>
	);
}

function Tabswitch(props) {
	if (props.value === 'home') {
		return <Welcome match={props.match} />;
	} else if (props.value === 'title0') {
		return <FrontEnd />;
	} else if (props.value === 'title1') {
		return <Backend />;
	} else if (props.value === 'title2') {
		return <PrograminLanguage />;
	} else if (props.value === 'title3') {
		return <Database />;
	} else if (props.value === 'title4') {
		return <TeamCollabration />;
	} else if (props.value === 'title5') {
		return <BuildTools />;
	} else if (props.value === 'title6') {
		return <MobileApp />;
	} else if (props.value === 'title7') {
		return <Testing />;
	}
}

const drawerWidth = 240;

const useStyles = makeStyles((theme) => ({
	root: {
		display: 'flex',
	},
	appBar: {
		width: `calc(100% - ${drawerWidth}px)`,
		marginLeft: drawerWidth,
	},
	drawer: {
		width: drawerWidth,
		flexShrink: 0,
	},
	drawerPaper: {
		width: drawerWidth,
	},
	// necessary for content to be below app bar
	toolbar: theme.mixins.toolbar,
	content: {
		flexGrow: 1,
		backgroundColor: theme.palette.background.default,
		padding: theme.spacing(3),
	},
	search: {
		position: 'relative',
		borderRadius: theme.shape.borderRadius,
		backgroundColor: fade(theme.palette.common.white, 0.15),
		'&:hover': {
			backgroundColor: fade(theme.palette.common.white, 0.25),
		},
		marginLeft: 0,
		width: '100%',
		[theme.breakpoints.up('sm')]: {
			marginLeft: theme.spacing(1),
			width: 'auto',
		},
	},
	searchIcon: {
		padding: theme.spacing(0, 2),
		height: '100%',
		position: 'absolute',
		pointerEvents: 'none',
		display: 'flex',
		alignItems: 'center',
		justifyContent: 'center',
	},
	inputRoot: {
		color: 'inherit',
	},
	inputInput: {
		padding: theme.spacing(1, 1, 1, 0),
		// vertical padding + font size from searchIcon
		paddingLeft: `calc(1em + ${theme.spacing(4)}px)`,
		transition: theme.transitions.create('width'),
		width: '100%',
		[theme.breakpoints.up('sm')]: {
			width: '12ch',
			'&:focus': {
				width: '20ch',
			},
		},
	},
	title: {
		flexGrow: 1,
	},
}));
