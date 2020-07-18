import React from 'react';
import Box from '@material-ui/core/Box';

export default class Welcome extends React.Component {
	render() {
		return (
			<h1>
				<br />
				Hello,
				<Box p={1} color='red' bgcolor='cyan'>
					Give me some space!
				</Box>
			</h1>
		);
	}
}
