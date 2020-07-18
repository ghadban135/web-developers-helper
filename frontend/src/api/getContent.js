//
//
const getContent = async () => {
	const response = await fetch(`http://localhost:8000/api/subcategory/1`);
	const result = await response.json();
	const arr = result.subcategory.map(({ name }) => name);
	if (result.success) {
		return arr;
	}
};

export default getContent;
