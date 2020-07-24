import React from 'react';
import { makeStyles } from '@material-ui/core/styles';
import TextField from '@material-ui/core/TextField';
import Rating from '@material-ui/lab/Rating';
import Typography from '@material-ui/core/Typography';
import Box from '@material-ui/core/Box';

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
	const [comment, setComment] = React.useState('');
	const [value, setValue] = React.useState(2);

	const handleCommit = async () => {
		const body = new FormData();
		body.append('content_id', props.commentId);
		body.append('comment', comment);
		body.append('rating', value);
		const response = await fetch(`http://localhost:8000/api/feedback`, {
			method: 'POST',
			body,
			headers: {
				Authorization: `Bearer ${localStorage.token}`,
			},
		});
	};
	return (
		<div className={classes.main}>
			<div style={{ marginLeft: '25px' }}>
				<div style={{ marginLeft: '-15px', marginBottom: '-30px' }}>
					<Box component='fieldset' mb={3} borderColor='transparent'>
						<Typography component='legend'>Rate this link</Typography>
						<Rating
							name='simple-controlled'
							precision={0.5}
							value={value}
							onChange={(event, newValue) => {
								setValue(newValue);
							}}
						/>
					</Box>
				</div>
				<TextField
					id='filled-multiline-static'
					label='Comment'
					value={comment}
					onChange={(e) => setComment(e.target.value)}
					rowsMax={2}
					rows={2}
					multiline
					style={{ fontFamily: 'Muli-Regular', fontSize: '12px' }}
				/>
			</div>
			<div style={{ marginRight: '25px' }}>
				<Button variant='outlined' color='primary' onClick={handleCommit}>
					Save
				</Button>
			</div>
		</div>
	);
}
