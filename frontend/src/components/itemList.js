import React from 'react';
import { List, ListItem, makeStyles, Divider, Box } from '@material-ui/core';
import ListItemText from '@material-ui/core/ListItemText';
import Pagination from '@material-ui/lab/Pagination';
import StarIcon from '@material-ui/icons/Star';
import { yellow } from '@material-ui/core/colors';
import { getComment } from '../api/getContent';
import CommentList from './commentList';
import Feedback from './feedback';
import Typography from '@material-ui/core/Typography';
import IconButton from '@material-ui/core/IconButton';
import LinkIcon from '@material-ui/icons/Link';

const useStyles = makeStyles((theme) => ({
	root: {
		width: '100%',
		backgroundColor: theme.palette.background.paper,
	},
	item: {
		maxWidth: '30vw',
		padding: theme.spacing(1.2),
	},
	paginator: {
		justifyContent: 'center',
		padding: '10px',
	},
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

const ItemList = (props) => {
	const classes = useStyles();
	const itemsPerPage = 5;
	const [page, setPage] = React.useState(1);
	const [noOfPages] = React.useState(
		Math.ceil(props.content.length / itemsPerPage)
	);
	const [comment, setComment] = React.useState([]);
	const [isSignin, setSignin] = React.useState(false);

	const handleChange = (event, value) => {
		setPage(value);
	};
	const handleComment = (value) => {
		setComment([]);
		getComment(value).then(function (result) {
			setComment(result);
		});
	};
	return (
		<div
			style={{
				display: 'flex',
				justifyContent: 'space-between',
			}}
		>
			<div style={{ width: '65%' }} className={classes.leftSide}>
				<div>
					<List dense compoent='span'>
						{props.content
							.slice((page - 1) * itemsPerPage, page * itemsPerPage)
							.map((item) => {
								const labelId = `list-secondary-label-${item.title}`;
								return (
									<ListItem
										key={item.id}
										button
										onClick={() => handleComment(item.id)}
									>
										<ListItemText
											id={labelId}
											primary={'Title: ' + item.title}
											secondary={'Link: ' + item.link}
											className={classes.item}
										/>
										<IconButton>
											<LinkIcon onClick={() => window.open(item.link)} />
										</IconButton>
										{item.rating}
										<StarIcon style={{ color: yellow[700] }}></StarIcon>(
										{item.review} Reviews)
									</ListItem>
								);
							})}
					</List>
					<Divider />
					<Box component='span'>
						<Pagination
							count={noOfPages}
							page={page}
							onChange={handleChange}
							defaultPage={1}
							color='primary'
							size='large'
							showFirstButton
							showLastButton
							classes={{ ul: classes.paginator }}
						/>
					</Box>
				</div>
			</div>
			<div style={{ width: '30%' }} className={classes.righSide}>
				{props.isLogin ? <Feedback /> : null}
				<CommentList comment={comment} />
				{props.isLogin ? null : (
					<Typography className={classes.text}>
						If you want to add comment or a rating to a specific link please
						sign in first
					</Typography>
				)}
			</div>
		</div>
	);
};

export default ItemList;
