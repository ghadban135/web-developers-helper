import React from 'react';
import Box from '@material-ui/core/Box';
import LineTo from 'react-lineto';
import { SteppedLineTo } from 'react-lineto';
import { Line } from 'react-lineto';
import '../App.css';

export default class Welcome extends React.Component {
	render() {
		return (
			<div>
				<br />
				<br />
				<br />
				<div style={{ textAlign: 'center', fontSize: '25px' }}>
					Find the Best Programming Courses & Tutorials
				</div>
				<br />
				<br />
				<br />
				<div
					style={{
						flexWrap: 'wrap',
						marginLeft: '-9.5px',
						marginRight: '-9.5px',
						display: 'flex',
						justifyContent: 'flex-start',
					}}
				>
					<div>
						<img
							class='topic-thumbnail'
							alt='Python Tutorials and Courses'
							src='https://hackr.io/tutorials/python/logo-python.svg?ver=1562823957'
						/>
						<p class='text-img'>Python</p>
					</div>
					<div>
						<img
							class='topic-thumbnail'
							alt='JavaScript Tutorials and Courses'
							src='https://hackr.io/tutorials/javascript/logo-javascript.svg?ver=1587977697'
						/>
						<p class='text-img'>javascript</p>
					</div>
					<div>
						<img
							class='topic-thumbnail'
							alt='Java Tutorials and Courses'
							src='https://hackr.io/tutorials/java/logo-java.svg?ver=1579862171'
						/>
						<p class='text-img'>Java</p>
					</div>
					<div>
						<img
							class='topic-thumbnail'
							alt='HTML 5 Tutorials and Courses'
							src='https://hackr.io/tutorials/html-5/logo-html-5.svg?ver=1587977020'
						/>
						<p class='text-img'>HTML</p>
					</div>
					<div>
						<img
							class='topic-thumbnail'
							alt='React Tutorials and Courses'
							src='https://hackr.io/tutorials/react/logo-react.svg?ver=1588062753'
						/>
						<p class='text-img'>React</p>
					</div>
					<div>
						<img
							class='topic-thumbnail'
							alt='Angular Tutorials and Courses'
							src='https://hackr.io/tutorials/angular/logo-angular.svg?ver=1590863531'
						/>
						<p class='text-img'>Angular</p>
					</div>
					<div>
						<img
							class='topic-thumbnail'
							alt='Node.js Tutorials and Courses'
							src='https://hackr.io/tutorials/node-js/logo-node-js.svg?ver=1590331795'
						/>
						<p class='text-img'>Node.js</p>
					</div>
					<div>
						<img
							class='topic-thumbnail'
							alt='CSS Tutorials and Courses'
							src='https://hackr.io/tutorials/css/logo-css.svg?ver=1587721903'
						/>
						<p class='text-img'>CSS</p>
					</div>
					<div>
						<img
							class='topic-thumbnail'
							alt='PHP Tutorials and Courses'
							src='https://hackr.io/tutorials/php/logo-php.svg?ver=1579862212'
						/>
						<p class='text-img'>PHP</p>
					</div>
					<div>
						<img
							class='topic-thumbnail'
							alt='Django Tutorials and Courses'
							src='https://hackr.io/tutorials/django/logo-django.svg?ver=1579862450'
						/>
						<p class='text-img'>Django</p>
					</div>
					<div>
						<img
							class='topic-thumbnail'
							alt='Git Tutorials and Courses'
							src='https://hackr.io/tutorials/git/logo-git.svg?ver=1587724445'
						/>
						<p class='text-img'>Git</p>
					</div>
					<div>
						<img
							class='topic-thumbnail'
							alt='MySQL Tutorials and Courses'
							src='https://hackr.io/tutorials/mysql/logo-mysql.svg?ver=1587981026'
						/>
						<p class='text-img'>MySQL</p>
					</div>
					<div>
						<img
							class='topic-thumbnail'
							alt='React Native Tutorials and Courses'
							src='https://hackr.io/tutorials/react-native/logo-react-native.svg?ver=1588062724'
						/>
						<p class='text-img'>React Native</p>
					</div>
					<div>
						<img
							class='topic-thumbnail'
							alt='Flutter Tutorials and Courses'
							src='https://hackr.io/tutorials/flutter/logo-flutter.svg?ver=1579862938'
						/>
						<p class='text-img'>Flutter</p>
					</div>
					<div>
						<img
							class='topic-thumbnail'
							alt='Vue.js Tutorials and Courses'
							src='https://hackr.io/tutorials/vue-js/logo-vue-js.svg?ver=1555390471'
						/>
						<p class='text-img'>Vue.js</p>
					</div>
					<div>
						<img
							class='topic-thumbnail'
							alt='Laravel Tutorials and Courses'
							src='https://hackr.io/tutorials/laravel/logo-laravel.svg?ver=1550762399'
						/>
						<p class='text-img'>Laravel</p>
					</div>
					<div>
						<img
							class='topic-thumbnail'
							alt='PostgreSQL Tutorials and Courses'
							src='https://hackr.io/tutorials/postgresql/logo-postgresql.svg?ver=1555390079'
						/>
						<p class='text-img'>PostgreSQl</p>
					</div>
					<div>
						<img
							class='topic-thumbnail'
							alt='Java Spring Framework Tutorials and Courses'
							src='https://hackr.io/tutorials/java-spring-framework/logo-java-spring-framework.svg?ver=1555390385'
						/>
						<p class='text-img'>Spring</p>
					</div>
					<div>
						<img
							class='topic-thumbnail'
							alt='Docker Tutorials and Courses'
							src='https://hackr.io/tutorials/docker/logo-docker.svg?ver=1555389348'
						/>
						<p class='text-img'>Docker</p>
					</div>
				</div>
			</div>
		);
	}
}
