import React from 'react';
import { List, ListItem, makeStyles, Divider, Box } from '@material-ui/core';
import ListItemText from '@material-ui/core/ListItemText';
import Pagination from '@material-ui/lab/Pagination';
import Typography from '@material-ui/core/Typography';
import StarIcon from '@material-ui/icons/Star';
import { yellow } from '@material-ui/core/colors';

const useStyles = makeStyles((theme) => ({
	root: {
		width: '100%',
		backgroundColor: theme.palette.background.paper,
	},
	item: {
		padding: theme.spacing(1.2),
	},
	paginator: {
		justifyContent: 'center',
		padding: '10px',
	},
	comment: {
		textAlign: 'center',
	},
	commentList: {
		overflow: 'auto',
		maxHeight: 300,
	},
}));

const CommentList = (props) => {
	const classes = useStyles();

	return (
		<div>
			{/* <Typography className={classes.comment}>Comment:</Typography> */}
			<List dense compoent='span' className={classes.commentList}>
				{content.map((item) => {
					const labelId = `list-secondary-label-${item.title}`;
					return (
						<>
							<ListItem key={item.id}>
								<ListItemText
									id={labelId}
									primary={item.user_id + ' :'}
									secondary={item.comment}
									className={classes.item}
								/>
							</ListItem>
							<Divider />
						</>
					);
				})}
			</List>
			<Divider />
		</div>
	);
};

export default CommentList;

const content = [
	{
		id: 1,
		user_id: 1,
		content_id: 2,
		comment: 'ccmmjesbhj',
		rating: 5,
	},
	{
		id: 2,
		user_id: 1,
		content_id: 2,
		comment: 'io2oiwio2je',
		rating: 5,
	},
	{
		id: 3,
		user_id: 1,
		content_id: 2,
		comment: 'wdnj',
		rating: 5,
	},
	{
		id: 4,
		user_id: 1,
		content_id: 2,
		comment: 'qoiiowoi',
		rating: 5,
	},
	{
		id: 5,
		user_id: 1,
		content_id: 2,
		comment: 'sss',
		rating: 5,
	},
	{
		id: 6,
		user_id: 1,
		content_id: 2,
		comment: 'aa',
		rating: 5,
	},
	{
		id: 7,
		user_id: 1,
		content_id: 2,
		comment: 'bb',
		rating: 5,
	},
	{
		id: 8,
		user_id: 1,
		content_id: 2,
		comment: 'qoiiowoi',
		rating: 5,
	},
	{
		id: 9,
		user_id: 1,
		content_id: 2,
		comment: 'ccmmjesbhj',
		rating: 5,
	},
	{
		id: 10,
		user_id: 1,
		content_id: 2,
		comment: 'io2oiwio2je',
		rating: 5,
	},
	{
		id: 11,
		user_id: 1,
		content_id: 2,
		comment: 'wdnj',
		rating: 5,
	},
	{
		id: 12,
		user_id: 1,
		content_id: 2,
		comment: 'qoiiowoi',
		rating: 5,
	},
	{
		id: 13,
		user_id: 1,
		content_id: 2,
		comment: 'ccmmjesbhj',
		rating: 5,
	},
	{
		id: 14,
		user_id: 1,
		content_id: 2,
		comment: 'io2oiwio2je',
		rating: 5,
	},
	{
		id: 15,
		user_id: 1,
		content_id: 2,
		comment: 'wdnj',
		rating: 5,
	},
	{
		id: 16,
		user_id: 1,
		content_id: 2,
		comment: 'qoiiowoi',
		rating: 5,
	},
];
