import axios from 'axios';

export const getSubCategory = (id) => {
	return axios
		.get(`http://localhost:8000/api/subcategory/${id}`)
		.then(function (response) {
			if (response.data.success)
				return response.data.subcategory.map(({ name }) => name);
		});
};
// export const getSubCategory = async () => {
// 	const response = await fetch(`http://localhost:8000/api/subcategory/1`)
// 		.then(function (response) {
// 			return response.json();
// 		})
// 		.then(function (result) {
// 			console.log(result.subcategory);
// 			if (result.success) return result.subcategory.map(({ name }) => name);
// 		});
// };
export const getContent = (id) => {
	return axios
		.get(`http://localhost:8000/api/content/${id}`)
		.then(function (response) {
			if (response.data.success) return response.data.content;
		});
};

export const getComment = (id) => {
	return axios
		.get(`http://localhost:8000/api/content-feedback/${id}`)
		.then(function (response) {
			if (response.data.success) return response.data.feedback;
		});
};
