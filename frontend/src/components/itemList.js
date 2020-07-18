import React from 'react';
import { List, ListItem, makeStyles, Divider, Box } from '@material-ui/core';
import ListItemText from '@material-ui/core/ListItemText';
import Pagination from '@material-ui/lab/Pagination';
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
}));

const ItemList = (props) => {
	const classes = useStyles();
	const itemsPerPage = 5;
	const [page, setPage] = React.useState(1);
	const [noOfPages] = React.useState(Math.ceil(content.length / itemsPerPage));

	const handleChange = (event, value) => {
		setPage(value);
	};
	return (
		<div>
			<List dense compoent='span'>
				{content
					.slice((page - 1) * itemsPerPage, page * itemsPerPage)
					.map((item) => {
						const labelId = `list-secondary-label-${item.title}`;
						return (
							<ListItem key={item.id} button onClick={() => console.log('')}>
								<ListItemText
									id={labelId}
									primary={'Title: ' + item.title}
									secondary={'Link: ' + item.link}
									className={classes.item}
								/>
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
	);
};

export default ItemList;

const content = [
	{
		id: 1,
		title: 'front',
		link: 'link1',
		rating: 2,
		review: 9,
	},
	{
		id: 2,
		title: 'back',
		link: 'link2',
		rating: 5,
		review: 7,
	},
	{
		id: 3,
		title: 'front',
		link: 'link1',
		rating: 2,
		review: 9,
	},
	{
		id: 4,
		title: 'back',
		link: 'link2',
		rating: 5,
		review: 7,
	},
	{
		id: 5,
		title: 'front',
		link: 'link1',
		rating: 2,
		review: 9,
	},
	{
		id: 6,
		title: 'back',
		link: 'link2',
		rating: 5,
		review: 7,
	},
	{
		id: 7,
		title: 'front',
		link: 'link1',
		rating: 2,
		review: 9,
	},
	{
		id: 2,
		title: 'back',
		link: 'link2',
		rating: 5,
		review: 7,
	},
	{
		id: 8,
		title: 'front',
		link: 'link1',
		rating: 2,
		review: 9,
	},
	{
		id: 9,
		title: 'back',
		link: 'link2',
		rating: 5,
		review: 7,
	},
	{
		id: 10,
		title: 'front',
		link: 'link1',
		rating: 2,
		review: 9,
	},
	{
		id: 11,
		title: 'back',
		link: 'link2',
		rating: 5,
		review: 7,
	},
	{
		id: 12,
		title: 'front',
		link: 'link1',
		rating: 2,
		review: 9,
	},
	{
		id: 13,
		title: 'back',
		link: 'link2',
		rating: 5,
		review: 7,
	},
	{
		id: 14,
		title: 'front',
		link: 'link1',
		rating: 2,
		review: 9,
	},
	{
		id: 15,
		title: 'back',
		link: 'link2',
		rating: 5,
		review: 7,
	},
];
