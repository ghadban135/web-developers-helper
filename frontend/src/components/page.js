import React, { useState } from 'react';
import { makeStyles } from '@material-ui/core/styles';
import CommentList from '../components/commentList';
import ItemList from '../components/itemList';
import Feedback from '../components/feedback';
import Typography from '@material-ui/core/Typography';

const useStyles = makeStyles((theme) => ({
	righSide: {
		backgroundColor: '#ffe6e9',
		border: 'thin solid rgba(0, 0, 0, 0.12)',
		borderRadius: '30px',
		boxShadow:
			'0px 2px 4px -1px rgba(0, 0, 0, 0.2), 0px 4px 5px 0px rgba(0, 0, 0, 0.14), 0px 1px 10px 0px rgba(0, 0, 0, 0.12)',
	},
	leftSide: {
		backgroundColor: '#b8ffb8',
		border: 'thin solid rgba(0, 0, 0, 0.12)',
		borderRadius: '30px',
		boxShadow:
			'0px 2px 4px -1px rgba(0, 0, 0, 0.2), 0px 4px 5px 0px rgba(0, 0, 0, 0.14), 0px 1px 10px 0px rgba(0, 0, 0, 0.12)',
	},
	text: {
		margin: '40px 10px 0px 10px',
		textAlign: 'center',
		color: '#634aed',
	},
}));

export default function Page(props) {
	const classes = useStyles();
	const [isSignin, setSignin] = useState(false);
	return (
		<div
			style={{
				display: 'flex',
				justifyContent: 'space-between',
			}}
		>
			<div style={{ width: '65%' }} className={classes.leftSide}>
				<ItemList content={props.content} />
			</div>
			<div style={{ width: '30%' }} className={classes.righSide}>
				{isSignin ? <Feedback /> : null}
				<CommentList />
				{isSignin ? null : (
					<Typography className={classes.text}>
						If you want to add comment or a rating to a specific link please
						sign in first
					</Typography>
				)}
			</div>
		</div>
	);
}
