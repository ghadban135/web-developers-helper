import React from 'react';
import { makeStyles } from '@material-ui/core/styles';
import TextField from '@material-ui/core/TextField';

import SimpleRating from './rating';
import { Button } from '@material-ui/core';

const useStyles = makeStyles((theme) => ({
	main: {
		display: 'flex',
		justifyContent: 'space-around',
		paddingTop: '30px',
	},
}));

export default function Feedback(props) {
	const classes = useStyles();
	return (
		<div className={classes.main}>
			<div style={{ marginLeft: '25px' }}>
				<SimpleRating />
				<TextField
					id='filled-multiline-static'
					label='Comment'
					placeholder='Comment'
					rowsMax={3}
					rows={3}
					multiline
					style={{ fontFamily: 'Muli-Regular', fontSize: '12px' }}
				/>
			</div>
			<div style={{ marginRight: '25px' }}>
				<Button variant='outlined' color='primary'>
					Save
				</Button>
			</div>
		</div>
	);
}
