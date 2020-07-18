import React from 'react';
import { List, ListItem, makeStyles, Divider } from '@material-ui/core';
import ListItemText from '@material-ui/core/ListItemText';

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
				{props.comment.map((item) => {
					const labelId = `list-secondary-label-${item.title}`;
					return (
						<>
							<ListItem key={item.id}>
								<ListItemText
									id={labelId}
									primary={item.user.user_name + ' :'}
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
