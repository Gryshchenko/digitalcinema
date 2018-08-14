import axios from 'axios';

export function PostData(type, userData) {
	let BaseUrl = 'https://hypertube.vgryshchenko.work/';
	return new Promise((resolve, reject) => {
		axios.post(BaseUrl + type, userData)
		.then(res => {
			resolve(res.data);
		})
		.catch(error => {
			reject(error);
		});
	});
}
