import React, { useState } from 'react';
import Rating from '@material-ui/lab/Rating';
import Typography from '@material-ui/core/Typography';
import Box from '@material-ui/core/Box';

export default function SimpleRating() {
	const [value, setValue] = useState(2);

	return (
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
	);
}
