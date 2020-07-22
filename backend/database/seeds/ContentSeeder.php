<?php

use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('content')->insert([
            [
            'title' =>'Official React website',
            'link'=>'https://reactjs.org/',
            'rating'=>4,
            'review'=>20,
            'subcategory_id'=>2,
            ],
            [
            'title' =>'Dan Abramov’s blog',
            'link'=>'https://overreacted.io/ ',
            'rating'=>4,
            'review'=>20,
            'subcategory_id'=>2,
            ],
            [
            'title' =>'Easy, shareable react projects',
            'link'=>'https://codesandbox.io/ ',
            'rating'=>4,
            'review'=>20,
            'subcategory_id'=>2,
            ],
            [
            'title' =>'A react heavy course offered by University of Helsinki',
            'link'=>'https://fullstackopen.com/en  ',
            'rating'=>4,
            'review'=>20,
            'subcategory_id'=>2,
            ],
            [
            'title' =>' React course',
            'link'=>'https://reactforbeginners.com/  ',
            'rating'=>4,
            'review'=>20,
            'subcategory_id'=>2,
            ],
             [
            'title' =>'A (Mostly) Complete Guide to React Rendering Behavior',
            'link'=>'https://blog.isquaredsoftware.com/2020/05/blogged-answers-a-mostly-complete-guide-to-react-rendering-behavior/  ',
            'rating'=>4,
            'review'=>20,
            'subcategory_id'=>2,
            ],
              [
            'title' =>'react-static',
            'link'=>'https://github.com/react-static/react-static ',
            'rating'=>4,
            'review'=>20,
            'subcategory_id'=>2,
            ],
            [
            'title' =>'Static Site Generation',
            'link'=>'https://gatsbyjs.org/',
            'rating'=>4,
            'review'=>20,
            'subcategory_id'=>2,
            ],
               [
            'title' =>'Routing',
            'link'=>'https://github.com/ReactTraining/react-router ',
            'rating'=>4,
            'review'=>20,
            'subcategory_id'=>2,
            ],
            [
            'title' =>'Routing Hook Based',
            'link'=>'https://github.com/kyeotic/raviger ',
            'rating'=>4,
            'review'=>20,
            'subcategory_id'=>2,
            ],
             [
            'title' =>'State Management',
            'link'=>'https://github.com/reduxjs/redux',
            'rating'=>4,
            'review'=>20,
            'subcategory_id'=>2,
            ],
              [
            'title' =>'awesome react',
            'link'=>'https://github.com/enaqx/awesome-react',
            'rating'=>4,
            'review'=>20,
            'subcategory_id'=>2,
            ],
              [
                'title'=> 'HTML For Beginners The Easy Way',
                'link'=> 'https://html.com/',
                'rating'=> 5,
                'review'=> 25,
                'subcategory_id'=> 1
              ],
              [
                'title'=> 'Responsive Web Design Fundamentals',
                'link'=> 'https://www.udacity.com/course/responsive-web-design-fundamentals--ud893',
                'rating'=> 4,
                'review'=> 8,
                'subcategory_id'=> 1
              ],
              [
                'title'=> 'A Complete Guide to Flexbox',
                'link'=> 'https://css-tricks.com/snippets/css/a-guide-to-flexbox/',
                'rating'=> 4,
                'review'=> 45,
                'subcategory_id'=> 1
              ],
              [
                'title'=> 'GRID GARDEN GAME',
                'link'=> 'https://cssgridgarden.com/',
                'rating'=> 3,
                'review'=> 62,
                'subcategory_id'=> 1
              ],
              [
                'title'=> 'HTML tutorial',
                'link'=> 'https://www.javatpoint.com/html-tutorial',
                'rating'=> 4,
                'review'=> 21,
                'subcategory_id'=> 1
              ],
              [
                'title'=> 'Tutorials point (HTML)',
                'link'=> 'https://www.tutorialspoint.com/html/index.htm',
                'rating'=> 2,
                'review'=> 43,
                'subcategory_id'=> 1
              ],
              [
                'title'=> 'Tutorials point (CSS)',
                'link'=> 'https://www.tutorialspoint.com/css/index.htm',
                'rating'=> 5,
                'review'=> 12,
                'subcategory_id'=> 1
              ],
              [
                'title'=> 'Child and Sibling Selectors',
                'link'=> 'https://css-tricks.com/child-and-sibling-selectors/',
                'rating'=> 4,
                'review'=> 8,
                'subcategory_id'=> 1
              ],
              [
                'title'=> 'Tutorial Republic',
                'link'=> 'https://www.tutorialrepublic.com/css-tutorial/',
                'rating'=> 3,
                'review'=> 7,
                'subcategory_id'=> 1
              ],
              [
                'title'=> 'Flexbox Froggy GAME',
                'link'=> 'https://flexboxfroggy.com/',
                'rating'=> 2,
                'review'=> 42,
                'subcategory_id'=> 1
              ],
              [
                'title'=> 'w3schools (HTML)',
                'link'=> 'https://www.w3schools.com/html/',
                'rating'=> 4,
                'review'=> 69,
                'subcategory_id'=> 1
              ],
              [
                'title'=> 'w3schools (CSS)',
                'link'=> 'https://www.w3schools.com/css/',
                'rating'=> 3,
                'review'=> 85,
                'subcategory_id'=> 1
              ],
              [
                'title'=> 'Responsive Design',
                'link'=> 'https://codelabs.developers.google.com/codelabs/pwa-responsive-design/index.html?index=..%2F..dev-pwa-training#0',
                'rating'=> 4,
                'review'=> 126,
                'subcategory_id'=> 1
              ],
              [
                'title'=> 'Meet the Pseudo Class Selectors',
                'link'=> 'https://css-tricks.com/pseudo-class-selectors/',
                'rating'=> 2,
                'review'=> 25,
                'subcategory_id'=> 1
              ],
              [
                'title'=> 'Inheriting box-sizing Probably Slightly Better Best-Practice',
                'link'=> 'https://css-tricks.com/inheriting-box-sizing-probably-slightly-better-best-practice/',
                'rating'=> 1,
                'review'=> 42,
                'subcategory_id'=> 1
              ],
              [
                'title'=> 'CSS colors',
                'link'=> 'https://developer.mozilla.org/en-US/docs/Web/CSS/color',
                'rating'=> 5,
                'review'=> 15,
                'subcategory_id'=> 1
              ],
              [
                'title'=> 'Margin Collapse in CSS: What, Why, and How',
                'link'=> 'https://medium.com/@joseph0crick/margin-collapse-in-css-what-why-and-how-328c10e37ca0',
                'rating'=> 5,
                'review'=> 8,
                'subcategory_id'=> 1
              ],
              [
                'title'=> 'A Couple of Use Cases for Calc()',
                'link'=> 'https://css-tricks.com/a-couple-of-use-cases-for-calc/',
                'rating'=> 4,
                'review'=> 75,
                'subcategory_id'=> 1
              ],
              [
                'title'=> 'Learn HTML',
                'link'=> 'https://www.learn-html.org/',
                'rating'=> 5,
                'review'=> 2,
                'subcategory_id'=> 1
              ],
              [
                'title'=> 'CodeCademy (HTML)',
                'link'=> 'https://www.codecademy.com/learn/learn-html',
                'rating'=> 4,
                'review'=> 5,
                'subcategory_id'=> 1
              ],
              [
                'title'=> 'When do the :hover, :focus, and :active pseudo-classes apply?',
                'link'=> 'https://bitsofco.de/when-do-the-hover-focus-and-active-pseudo-classes-apply/',
                'rating'=> 3,
                'review'=> 11,
                'subcategory_id'=> 1
              ],
              [
                'title'=> 'A Complete Guide to Grid',
                'link'=> 'https://css-tricks.com/snippets/css/complete-guide-grid/',
                'rating'=> 2,
                'review'=> 36,
                'subcategory_id'=> 1
              ],
              [
                'title'=> 'CSS Animation',
                'link'=> 'https://css-tricks.com/almanac/properties/a/animation/',
                'rating'=> 5,
                'review'=> 56,
                'subcategory_id'=> 1
              ],
              [
                'title'=> 'CSS Media Queries & Using Available Space',
                'link'=> 'https://css-tricks.com/css-media-queries/',
                'rating'=> 4,
                'review'=> 21,
                'subcategory_id'=> 1
              ],
              [
                'title'=> 'Responsive Images',
                'link'=> 'https://developers.google.com/web/fundamentals/design-and-ux/responsive/images',
                'rating'=> 2,
                'review'=> 25,
                'subcategory_id'=> 1
              ],
              [
                'title'=> 'Good and Bad CSS Practices for Beginners',
                'link'=> 'https://speckyboy.com/good-bad-css-practices/',
                'rating'=> 5,
                'review'=> 23,
                'subcategory_id'=> 1
              ],
              [
                'title'=> 'MDN web docs (HTML)',
                'link'=> 'https://developer.mozilla.org/en-US/docs/Learn/Getting_started_with_the_web/HTML_basics',
                'rating'=> 4,
                'review'=> 29,
                'subcategory_id'=> 1
              ],
              [
                'title'=> 'MDN web docs (CSS)',
                'link'=> 'https://developer.mozilla.org/en-US/docs/Learn/Getting_started_with_the_web/CSS_basics',
                'rating'=> 4,
                'review'=> 13,
                'subcategory_id'=> 1
              ],
              [
                'title'=> 'Build performant and progressive React applications.',
                'link'=> 'https://web.dev/react/',
                'rating'=> 4,
                'review'=> 2,
                'subcategory_id'=> 2
              ],
              [
                'title'=> 'React Tutorial: An Overview and Walkthrough',
                'link'=> 'https://www.taniarascia.com/getting-started-with-react/',
                'rating'=> 2,
                'review'=> 16,
                'subcategory_id'=> 2
              ],
              [
                'title'=> 'Angular (official website)',
                'link'=> 'https://angular.io/',
                'rating'=> 1,
                'review'=> 14,
                'subcategory_id'=> 3
              ],
              [
                'title'=> 'Build performant and progressive Angular applications.',
                'link'=> 'https://web.dev/angular/',
                'rating'=> 3,
                'review'=> 19,
                'subcategory_id'=> 3
              ],
              [
                'title'=> 'Angular-CLI',
                'link'=> 'https://cli.angular.io/',
                'rating'=> 5,
                'review'=> 17,
                'subcategory_id'=> 3
              ],
              [
                'title'=> 'Learn Angular with free step by step angular tutorials',
                'link'=> 'https://angular-templates.io/tutorials/about/learn-angular-from-scratch-step-by-step',
                'rating'=> 5,
                'review'=> 13,
                'subcategory_id'=> 3
              ],
              [
                'title'=> 'Angular Tutorial: Getting Started With Angular 8',
                'link'=> 'https://www.edureka.co/blog/angular-tutorial/',
                'rating'=> 4,
                'review'=> 25,
                'subcategory_id'=> 3
              ],
              [
                'title'=> 'Angular 4 Tutorial',
                'link'=> 'https://www.tutorialspoint.com/angular4/index.htm',
                'rating'=> 4,
                'review'=> 8,
                'subcategory_id'=> 3
              ],
              [
                'title'=> 'Angular 7 Tutorial',
                'link'=> 'https://www.javatpoint.com/angular-7-tutorial',
                'rating'=> 2,
                'review'=> 45,
                'subcategory_id'=> 3
              ],
              [
                'title'=> 'Getting started with Angular',
                'link'=> 'https://www.w3resource.com/angular/getting-started-with-angular.php',
                'rating'=> 5,
                'review'=> 62,
                'subcategory_id'=> 3
              ],
              [
                'title'=> 'Step by Step Guide to Your First Angular 5 App',
                'link'=> 'https://www.toptal.com/angular/angular-5-tutorial',
                'rating'=> 5,
                'review'=> 21,
                'subcategory_id'=> 3
              ],
              [
                'title'=> 'The Complete Angular Course: Beginner to Advanced',
                'link'=> 'https://www.udemy.com/course/the-complete-angular-master-class/?LSNPUBID=jU79Zysihs4&ranEAID=jU79Zysihs4&ranMID=39197&ranSiteID=jU79Zysihs4-tVmk_QcxymcV2qqRurlnlg&utm_medium=udemyads&utm_source=aff-campaign',
                'rating'=> 5,
                'review'=> 43,
                'subcategory_id'=> 3
              ],
              [
                'title'=> 'An awesome guide to get started working with Vue',
                'link'=> 'https://vuejs.org/v2/guide/',
                'rating'=> 5,
                'review'=> 12,
                'subcategory_id'=> 4
              ],
              [
                'title'=> 'An awesome 3 hour video on Vue',
                'link'=> 'https://www.youtube.com/watch?v=4deVCNJq3qc',
                'rating'=> 4,
                'review'=> 8,
                'subcategory_id'=> 4
              ],
              [
                'title'=> 'How to do certain things with Vue',
                'link'=> 'https://madewithvuejs.com/tutorials',
                'rating'=> 4,
                'review'=> 7,
                'subcategory_id'=> 4
              ],
              [
                'title'=> 'Vue Community guide',
                'link'=> 'https://vue-community.org/',
                'rating'=> 3,
                'review'=> 42,
                'subcategory_id'=> 4
              ],
              [
                'title'=> 'Vue CLI',
                'link'=> 'https://cli.vuejs.org/',
                'rating'=> 4,
                'review'=> 69,
                'subcategory_id'=> 4
              ],
              [
                'title'=> 'Vue Tutorial: An Overview and Walkthrough',
                'link'=> 'https://www.taniarascia.com/getting-started-with-vue/',
                'rating'=> 2,
                'review'=> 85,
                'subcategory_id'=> 4
              ],
              [
                'title'=> 'Learn Vue.js by Example',
                'link'=> 'https://coursetro.com/courses/23/Vue-Tutorial-in-2018---Learn-Vue.js-by-Example',
                'rating'=> 5,
                'review'=> 126,
                'subcategory_id'=> 4
              ],
              [
                'title'=> 'Learn Vue 2: Step By Step',
                'link'=> 'https://laracasts.com/series/learn-vue-2-step-by-step',
                'rating'=> 4,
                'review'=> 25,
                'subcategory_id'=> 4
              ],
              [
                'title'=> 'VueJS Tutorial',
                'link'=> 'https://www.tutorialspoint.com/vuejs/index.htm',
                'rating'=> 3,
                'review'=> 42,
                'subcategory_id'=> 4
              ],
              [
                'title'=> 'VueJS Courses',
                'link'=> 'https://www.vuemastery.com/courses/',
                'rating'=> 2,
                'review'=> 15,
                'subcategory_id'=> 4
              ],
              [
                'title'=> 'Laravel (Official website)',
                'link'=> 'https://laravel.com/docs/7.x',
                'rating'=> 4,
                'review'=> 8,
                'subcategory_id'=> 5
              ],
              [
                'title'=> 'Laravel Tutorial',
                'link'=> 'https://www.javatpoint.com/laravel',
                'rating'=> 3,
                'review'=> 75,
                'subcategory_id'=> 5
              ],
              [
                'title'=> 'Laravel framework Tutorial',
                'link'=> 'https://www.studentstutorial.com/laravel/laravel-tutorial',
                'rating'=> 4,
                'review'=> 2,
                'subcategory_id'=> 5
              ],
              [
                'title'=> 'Laravel Tutorial For Beginners :Basic Introduction to Laravel',
                'link'=> 'https://www.phptpoint.com/laravel-tutorial/',
                'rating'=> 2,
                'review'=> 5,
                'subcategory_id'=> 5
              ],
              [
                'title'=> 'Laravel Tutorial: Step by Step Guide to Building Your First Laravel Application',
                'link'=> 'https://laravel-news.com/your-first-laravel-application',
                'rating'=> 1,
                'review'=> 11,
                'subcategory_id'=> 5
              ],
              [
                'title'=> 'Laravel Tutorial Absolue Beginners',
                'link'=> 'https://www.tutorialspoint.com/laravel/index.htm',
                'rating'=> 5,
                'review'=> 36,
                'subcategory_id'=> 5
              ],
              [
                'title'=> 'Laravel 5.7 From Scratch',
                'link'=> 'https://laracasts.com/series/laravel-from-scratch-2018',
                'rating'=> 5,
                'review'=> 56,
                'subcategory_id'=> 5
              ],
              [
                'title'=> 'Eloquent by Example',
                'link'=> 'https://eloquentbyexample.com/',
                'rating'=> 4,
                'review'=> 21,
                'subcategory_id'=> 5
              ],
              [
                'title'=> 'Laravel 2019, the complete guide with real world projects',
                'link'=> 'https://www.udemy.com/course/best-laravel/?LSNPUBID=jU79Zysihs4&ranEAID=jU79Zysihs4&ranMID=39197&ranSiteID=jU79Zysihs4-YeckbDeUOH2hDcputqu5bg&utm_medium=udemyads&utm_source=aff-campaign',
                'rating'=> 5,
                'review'=> 25,
                'subcategory_id'=> 5
              ],
              [
                'title'=> 'Laravel 7/6 Tutorial From Scratch | Step By Step',
                'link'=> 'https://www.tutsmake.com/laravel-6-tutorial-from-scratch-laravel-step-by-step/',
                'rating'=> 4,
                'review'=> 23,
                'subcategory_id'=> 5
              ],
              [
                'title'=> 'Building an Application with Spring Boot',
                'link'=> 'https://spring.io/guides/gs/spring-boot/',
                'rating'=> 3,
                'review'=> 29,
                'subcategory_id'=> 6
              ],
              [
                'title'=> 'Spring Boot Tutorial',
                'link'=> 'https://www.javatpoint.com/spring-boot-tutorial',
                'rating'=> 2,
                'review'=> 13,
                'subcategory_id'=> 6
              ],
              [
                'title'=> 'Learn Spring Boot Absolue Beginners',
                'link'=> 'https://www.tutorialspoint.com/spring_boot/index.htm',
                'rating'=> 5,
                'review'=> 2,
                'subcategory_id'=> 6
              ],
              [
                'title'=> 'Learn Spring course',
                'link'=> 'https://www.baeldung.com/spring-boot',
                'rating'=> 4,
                'review'=> 16,
                'subcategory_id'=> 6
              ],
              [
                'title'=> 'Spring Boot Tutorials - Videos, Courses and Articles',
                'link'=> 'https://www.springboottutorial.com/',
                'rating'=> 2,
                'review'=> 14,
                'subcategory_id'=> 6
              ],
              [
                'title'=> 'Spring Boot 2 Tutorial',
                'link'=> 'https://howtodoinjava.com/spring-boot-tutorials/',
                'rating'=> 5,
                'review'=> 19,
                'subcategory_id'=> 6
              ],
              [
                'title'=> 'Spring Boot - Tutorial',
                'link'=> 'https://www.vogella.com/tutorials/SpringBoot/article.html',
                'rating'=> 4,
                'review'=> 17,
                'subcategory_id'=> 6
              ],
              [
                'title'=> 'Spring Data JPA Tutorial',
                'link'=> 'https://www.petrikainulainen.net/spring-data-jpa-tutorial/',
                'rating'=> 4,
                'review'=> 13,
                'subcategory_id'=> 6
              ],
              [
                'title'=> 'Spring MVC tutorial',
                'link'=> 'https://java2blog.com/spring-mvc-tutorial/',
                'rating'=> 4,
                'review'=> 25,
                'subcategory_id'=> 6
              ],
              [
                'title'=> 'Spring Tutorial – Spring Framework tutorial',
                'link'=> 'https://java2blog.com/introduction-to-spring-framework/',
                'rating'=> 2,
                'review'=> 8,
                'subcategory_id'=> 6
              ],
              [
                'title'=> 'Build Your REST API with Spring 5',
                'link'=> 'https://www.baeldung.com/rest-with-spring-course',
                'rating'=> 1,
                'review'=> 45,
                'subcategory_id'=> 6
              ],
              [
                'title'=> 'Express.js minimalist web framework for Node.js',
                'link'=> 'https://expressjs.com/',
                'rating'=> 3,
                'review'=> 62,
                'subcategory_id'=> 7
              ],
              [
                'title'=> 'Node.js - Express Framework',
                'link'=> 'https://www.tutorialspoint.com/nodejs/nodejs_express_framework.htm',
                'rating'=> 5,
                'review'=> 21,
                'subcategory_id'=> 7
              ],
              [
                'title'=> 'THE BEGINNER’S GUIDE: Understanding Node.js & Express.js fundamentals',
                'link'=> 'https://medium.com/@LindaVivah/the-beginners-guide-understanding-node-js-express-js-fundamentals-e15493462be1',
                'rating'=> 5,
                'review'=> 43,
                'subcategory_id'=> 7
              ],
              [
                'title'=> 'Express Complete tutorial',
                'link'=> 'https://codeforgeek.com/express-complete-tutorial-part-1/',
                'rating'=> 4,
                'review'=> 12,
                'subcategory_id'=> 7
              ],
              [
                'title'=> 'ExpressJS Tutorial',
                'link'=> 'https://www.tutorialspoint.com/expressjs/index.htm',
                'rating'=> 4,
                'review'=> 8,
                'subcategory_id'=> 7
              ],
              [
                'title'=> 'Node.js Express FrameWork Tutorial - Learn in 10 Minutes',
                'link'=> 'https://www.guru99.com/node-js-express.html',
                'rating'=> 2,
                'review'=> 7,
                'subcategory_id'=> 7
              ],
              [
                'title'=> 'Tutorial teacher ExpressJS',
                'link'=> 'https://www.tutorialsteacher.com/nodejs/expressjs',
                'rating'=> 5,
                'review'=> 42,
                'subcategory_id'=> 7
              ],
              [
                'title'=> 'Express.js Tutorial',
                'link'=> 'https://www.javatpoint.com/expressjs-tutorial',
                'rating'=> 5,
                'review'=> 69,
                'subcategory_id'=> 7
              ],
              [
                'title'=> 'Writing your first Django app, part 1',
                'link'=> 'https://docs.djangoproject.com/en/3.0/intro/tutorial01/',
                'rating'=> 4,
                'review'=> 85,
                'subcategory_id'=> 8
              ],
              [
                'title'=> 'Django Tutorial',
                'link'=> 'https://www.geeksforgeeks.org/django-tutorial/',
                'rating'=> 4,
                'review'=> 126,
                'subcategory_id'=> 8
              ],
              [
                'title'=> 'Learn Django Tutorial Python web framework',
                'link'=> 'https://www.tutorialspoint.com/django/index.htm',
                'rating'=> 3,
                'review'=> 25,
                'subcategory_id'=> 8
              ],
              [
                'title'=> 'Get Started With Django Part 1: Build a Portfolio App',
                'link'=> 'https://realpython.com/get-started-with-django-1/',
                'rating'=> 4,
                'review'=> 42,
                'subcategory_id'=> 8
              ],
              [
                'title'=> 'Django Tutorials',
                'link'=> 'https://realpython.com/tutorials/django/',
                'rating'=> 2,
                'review'=> 15,
                'subcategory_id'=> 8
              ],
              [
                'title'=> 'Django web framework',
                'link'=> 'https://www.fullstackpython.com/django.html',
                'rating'=> 5,
                'review'=> 8,
                'subcategory_id'=> 8
              ],
              [
                'title'=> 'A Complete Beginner Guide to Django',
                'link'=> 'https://simpleisbetterthancomplex.com/series/beginners-guide/1.11/',
                'rating'=> 4,
                'review'=> 75,
                'subcategory_id'=> 8
              ],
              [
                'title'=> 'PHP Tutorial',
                'link'=> 'https://www.w3schools.com/php/DEFAULT.asp',
                'rating'=> 3,
                'review'=> 2,
                'subcategory_id'=> 9
              ],
              [
                'title'=> 'learn-php',
                'link'=> 'https://www.learn-php.org/',
                'rating'=> 2,
                'review'=> 5,
                'subcategory_id'=> 9
              ],
              [
                'title'=> 'Learn the fundamentals of PHP',
                'link'=> 'https://www.codecademy.com/learn/learn-php',
                'rating'=> 4,
                'review'=> 11,
                'subcategory_id'=> 9
              ],
              [
                'title'=> 'Learn PHP Hypertext Preprocessor',
                'link'=> 'https://www.tutorialspoint.com/php/index.htm',
                'rating'=> 3,
                'review'=> 36,
                'subcategory_id'=> 9
              ],
              [
                'title'=> 'PHP Tutorial',
                'link'=> 'https://www.sololearn.com/Course/PHP/',
                'rating'=> 4,
                'review'=> 56,
                'subcategory_id'=> 9
              ],
              [
                'title'=> 'PHP Tutorial for Beginners: Learn in 7 Days',
                'link'=> 'https://www.guru99.com/php-tutorials.html',
                'rating'=> 2,
                'review'=> 21,
                'subcategory_id'=> 9
              ],
              [
                'title'=> 'PHP Tutorial',
                'link'=> 'https://www.javatpoint.com/php-tutorial',
                'rating'=> 1,
                'review'=> 25,
                'subcategory_id'=> 9
              ],
              [
                'title'=> 'php the right way',
                'link'=> 'https://phptherightway.com/',
                'rating'=> 5,
                'review'=> 23,
                'subcategory_id'=> 9
              ],
              [
                'title'=> 'PHP5 Tutorial',
                'link'=> 'https://php5-tutorial.com/',
                'rating'=> 5,
                'review'=> 29,
                'subcategory_id'=> 9
              ],
              [
                'title'=> 'PHP Tutorial',
                'link'=> 'http://www.nusphere.com/php/php_tutorial.htm',
                'rating'=> 4,
                'review'=> 13,
                'subcategory_id'=> 9
              ],
              [
                'title'=> 'PHP Tutorial Solo learn ',
                'link'=> 'https://www.sololearn.com/Course/PHP/',
                'rating'=> 5,
                'review'=> 2,
                'subcategory_id'=> 9
              ],
              [
                'title'=> 'The PHP Practitioner',
                'link'=> 'https://laracasts.com/series/php-for-beginners',
                'rating'=> 4,
                'review'=> 16,
                'subcategory_id'=> 9
              ],
              [
                'title'=> 'JavaScript Tutorial',
                'link'=> 'https://www.w3schools.com/js/',
                'rating'=> 3,
                'review'=> 14,
                'subcategory_id'=> 10
              ],
              [
                'title'=> 'The Modern JavaScript Tutorial',
                'link'=> 'https://javascript.info/',
                'rating'=> 2,
                'review'=> 19,
                'subcategory_id'=> 10
              ],
              [
                'title'=> 'learn-js.org interactive JavaScript tutorial.',
                'link'=> 'https://www.learn-js.org/',
                'rating'=> 5,
                'review'=> 17,
                'subcategory_id'=> 10
              ],
              [
                'title'=> 'The easiest way to learn & practice modern JavaScript step by step',
                'link'=> 'https://learnjavascript.online/',
                'rating'=> 4,
                'review'=> 13,
                'subcategory_id'=> 10
              ],
              [
                'title'=> 'Learn the JavaScript fundamentals',
                'link'=> 'https://www.codecademy.com/learn/introduction-to-javascript',
                'rating'=> 2,
                'review'=> 25,
                'subcategory_id'=> 10
              ],
              [
                'title'=> 'Javascript Tutorial Programming Language',
                'link'=> 'https://www.tutorialspoint.com/javascript/index.htm',
                'rating'=> 5,
                'review'=> 8,
                'subcategory_id'=> 10
              ],
              [
                'title'=> 'An introduction to Spread syntax in JavaScript',
                'link'=> 'https://www.freecodecamp.org/news/an-introduction-to-spread-syntax-in-javascript-fba39595922c/',
                'rating'=> 4,
                'review'=> 45,
                'subcategory_id'=> 10
              ],
              [
                'title'=> 'ES6 In Depth: Destructuring',
                'link'=> 'https://hacks.mozilla.org/2015/05/es6-in-depth-destructuring/',
                'rating'=> 4,
                'review'=> 62,
                'subcategory_id'=> 10
              ],
              [
                'title'=> 'What’s the Document Object Model, and why you should know how to use it.',
                'link'=> 'https://www.freecodecamp.org/news/whats-the-document-object-model-and-why-you-should-know-how-to-use-it-1a2d0bc5429d/',
                'rating'=> 4,
                'review'=> 21,
                'subcategory_id'=> 10
              ],
              [
                'title'=> 'JavaScript Events Explained',
                'link'=> 'https://flaviocopes.com/javascript-events/',
                'rating'=> 2,
                'review'=> 43,
                'subcategory_id'=> 10
              ],
              [
                'title'=> 'JavaScript Visualized: Prototypal Inheritance',
                'link'=> 'https://dev.to/lydiahallie/javascript-visualized-prototypal-inheritance-47co',
                'rating'=> 1,
                'review'=> 12,
                'subcategory_id'=> 10
              ],
              [
                'title'=> 'Regular expressions',
                'link'=> 'https://javascript.info/regular-expressions',
                'rating'=> 3,
                'review'=> 8,
                'subcategory_id'=> 10
              ],
              [
                'title'=> 'Getting Literal With ES6 Template Strings',
                'link'=> 'https://developers.google.com/web/updates/2015/01/ES6-Template-Strings',
                'rating'=> 5,
                'review'=> 7,
                'subcategory_id'=> 10
              ],
              [
                'title'=> 'JavaScript Promises: An introduction',
                'link'=> 'https://web.dev/promises/',
                'rating'=> 5,
                'review'=> 42,
                'subcategory_id'=> 10
              ],
              [
                'title'=> 'Async/await',
                'link'=> 'https://javascript.info/async-await',
                'rating'=> 4,
                'review'=> 69,
                'subcategory_id'=> 10
              ],
              [
                'title'=> 'JavaScript: What the heck is a Callback?',
                'link'=> 'https://codeburst.io/javascript-what-the-heck-is-a-callback-aba4da2deced',
                'rating'=> 4,
                'review'=> 85,
                'subcategory_id'=> 10
              ],
              [
                'title'=> 'A Fetch API Primer',
                'link'=> 'https://alligator.io/js/fetch-api/',
                'rating'=> 2,
                'review'=> 126,
                'subcategory_id'=> 10
              ],
              [
                'title'=> 'Developing Progressive Web Apps 03.2: Fetch API',
                'link'=> 'https://codelabs.developers.google.com/codelabs/pwa-fetch/index.html?index=..%2F..dev-pwa-training#0',
                'rating'=> 5,
                'review'=> 25,
                'subcategory_id'=> 10
              ],
              [
                'title'=> 'Learn Python',
                'link'=> 'https://www.learnpython.org/',
                'rating'=> 5,
                'review'=> 42,
                'subcategory_id'=> 11
              ],
              [
                'title'=> 'Python For Beginners',
                'link'=> 'https://www.python.org/about/gettingstarted/',
                'rating'=> 4,
                'review'=> 15,
                'subcategory_id'=> 11
              ],
              [
                'title'=> 'Learn Python Programming Language',
                'link'=> 'https://www.tutorialspoint.com/python/index.htm',
                'rating'=> 4,
                'review'=> 8,
                'subcategory_id'=> 11
              ],
              [
                'title'=> 'Learn Python 2',
                'link'=> 'https://www.codecademy.com/learn/learn-python',
                'rating'=> 3,
                'review'=> 75,
                'subcategory_id'=> 11
              ],
              [
                'title'=> 'w3schools python',
                'link'=> 'https://www.w3schools.com/python/',
                'rating'=> 4,
                'review'=> 2,
                'subcategory_id'=> 11
              ],
              [
                'title'=> 'Learn Python Programming',
                'link'=> 'https://www.programiz.com/python-programming',
                'rating'=> 2,
                'review'=> 5,
                'subcategory_id'=> 11
              ],
              [
                'title'=> 'Python Tutorials for Beginners',
                'link'=> 'https://www.guru99.com/python-tutorials.html',
                'rating'=> 5,
                'review'=> 11,
                'subcategory_id'=> 11
              ],
              [
                'title'=> 'Learn Python: Tutorials for Beginners, Intermediate, and Advanced Programmers',
                'link'=> 'https://stackify.com/learn-python-tutorials/',
                'rating'=> 4,
                'review'=> 36,
                'subcategory_id'=> 11
              ],
              [
                'title'=> 'Google Python Class',
                'link'=> 'https://developers.google.com/edu/python/',
                'rating'=> 3,
                'review'=> 56,
                'subcategory_id'=> 11
              ],
              [
                'title'=> 'basics of the popular Java language',
                'link'=> 'https://www.codecademy.com/learn/learn-java',
                'rating'=> 2,
                'review'=> 21,
                'subcategory_id'=> 12
              ],
              [
                'title'=> 'Java Tutorial',
                'link'=> 'https://www.w3schools.com/java/',
                'rating'=> 4,
                'review'=> 25,
                'subcategory_id'=> 12
              ],
              [
                'title'=> 'Learn java programing - java basics',
                'link'=> 'https://www.tutorialspoint.com/java/index.htm',
                'rating'=> 3,
                'review'=> 23,
                'subcategory_id'=> 12
              ],
              [
                'title'=> 'Learn Java Programming',
                'link'=> 'https://www.programiz.com/java-programming',
                'rating'=> 4,
                'review'=> 29,
                'subcategory_id'=> 12
              ],
              [
                'title'=> 'Java | How to start learning Java',
                'link'=> 'https://www.geeksforgeeks.org/java-how-to-start-learning-java/',
                'rating'=> 2,
                'review'=> 13,
                'subcategory_id'=> 12
              ],
              [
                'title'=> 'Think Java',
                'link'=> 'https://greenteapress.com/wp/think-java/',
                'rating'=> 1,
                'review'=> 2,
                'subcategory_id'=> 12
              ],
              [
                'title'=> 'Learn Rust',
                'link'=> 'https://www.rust-lang.org/learn',
                'rating'=> 5,
                'review'=> 16,
                'subcategory_id'=> 13
              ],
              [
                'title'=> 'Learn Rust absolute beginners',
                'link'=> 'https://www.tutorialspoint.com/rust/index.htm',
                'rating'=> 5,
                'review'=> 14,
                'subcategory_id'=> 13
              ],
              [
                'title'=> 'The Rust Programming Language',
                'link'=> 'https://doc.rust-lang.org/book/',
                'rating'=> 4,
                'review'=> 19,
                'subcategory_id'=> 13
              ],
              [
                'title'=> 'Introduction to Rust Tutorial',
                'link'=> 'https://www.koderhq.com/tutorial/rust/',
                'rating'=> 5,
                'review'=> 17,
                'subcategory_id'=> 13
              ],
              [
                'title'=> 'Rust',
                'link'=> 'https://stepik.org/lesson/9268/step/1',
                'rating'=> 4,
                'review'=> 13,
                'subcategory_id'=> 13
              ],
              [
                'title'=> 'Roguelike Tutorial in Rust',
                'link'=> 'https://jaredonline.svbtle.com/roguelike-tutorial-in-rust',
                'rating'=> 3,
                'review'=> 25,
                'subcategory_id'=> 13
              ],
              [
                'title'=> 'Learn to build Rust apps',
                'link'=> 'https://www.newline.co/fullstack-rust',
                'rating'=> 2,
                'review'=> 8,
                'subcategory_id'=> 13
              ],
              [
                'title'=> 'MySQL Tutorial',
                'link'=> 'https://www.mysqltutorial.org/',
                'rating'=> 5,
                'review'=> 45,
                'subcategory_id'=> 14
              ],
              [
                'title'=> 'w3schools SQL Tutorial',
                'link'=> 'https://www.w3schools.com/sql/',
                'rating'=> 4,
                'review'=> 62,
                'subcategory_id'=> 14
              ],
              [
                'title'=> 'Learn MYSQL database management system',
                'link'=> 'https://www.tutorialspoint.com/mysql/index.htm',
                'rating'=> 2,
                'review'=> 21,
                'subcategory_id'=> 14
              ],
              [
                'title'=> 'MySQL tutorial for beginners and professionals.',
                'link'=> 'https://www.javatpoint.com/mysql-tutorial',
                'rating'=> 5,
                'review'=> 43,
                'subcategory_id'=> 14
              ],
              [
                'title'=> 'MySQL Tutorial for Beginners Learn in 7 Days',
                'link'=> 'https://www.guru99.com/mysql-tutorial.html',
                'rating'=> 4,
                'review'=> 12,
                'subcategory_id'=> 14
              ],
              [
                'title'=> 'Learn to communicate with databases using SQL',
                'link'=> 'https://www.codecademy.com/learn/learn-sql',
                'rating'=> 4,
                'review'=> 8,
                'subcategory_id'=> 14
              ],
              [
                'title'=> 'A Basic MySQL Tutorial',
                'link'=> 'https://www.digitalocean.com/community/tutorials/a-basic-mysql-tutorial',
                'rating'=> 4,
                'review'=> 7,
                'subcategory_id'=> 14
              ],
              [
                'title'=> 'MySQL Tutorial',
                'link'=> 'https://www.w3resource.com/mysql/mysql-tutorials.php',
                'rating'=> 2,
                'review'=> 42,
                'subcategory_id'=> 14
              ],
              [
                'title'=> 'PostgreSQL: The World Most Advanced Open Source Relational Database',
                'link'=> 'https://www.postgresql.org/',
                'rating'=> 1,
                'review'=> 69,
                'subcategory_id'=> 15
              ],
              [
                'title'=> 'PostgreSQL Tutorial',
                'link'=> 'https://www.postgresqltutorial.com/',
                'rating'=> 3,
                'review'=> 85,
                'subcategory_id'=> 15
              ],
              [
                'title'=> 'Postgres Guide',
                'link'=> 'http://postgresguide.com/',
                'rating'=> 5,
                'review'=> 126,
                'subcategory_id'=> 15
              ],
              [
                'title'=> 'PostgreSQL Exercises',
                'link'=> 'https://pgexercises.com/',
                'rating'=> 5,
                'review'=> 25,
                'subcategory_id'=> 15
              ],
              [
                'title'=> 'Learn Database Design using PostgreSQL',
                'link'=> 'https://www.eduonix.com/courses/Web-Development/Learn-Database-Design-using-PostgreSQL',
                'rating'=> 4,
                'review'=> 42,
                'subcategory_id'=> 15
              ],
              [
                'title'=> 'MongoDB The database for modern applications',
                'link'=> 'https://www.mongodb.com/',
                'rating'=> 4,
                'review'=> 15,
                'subcategory_id'=> 16
              ],
              [
                'title'=> 'Get started with MongoDB',
                'link'=> 'https://docs.mongodb.com/',
                'rating'=> 2,
                'review'=> 8,
                'subcategory_id'=> 16
              ],
              [
                'title'=> 'MongoDB University - for free',
                'link'=> 'https://university.mongodb.com/',
                'rating'=> 5,
                'review'=> 75,
                'subcategory_id'=> 16
              ],
              [
                'title'=> 'Learn MongoDb simply easy learnig',
                'link'=> 'https://www.tutorialspoint.com/mongodb/index.htm',
                'rating'=> 5,
                'review'=> 2,
                'subcategory_id'=> 16
              ],
              [
                'title'=> 'MongoDB 101',
                'link'=> 'https://studio3t.com/academy/',
                'rating'=> 4,
                'review'=> 5,
                'subcategory_id'=> 16
              ],
              [
                'title'=> 'MongoDB Quickstart with Python',
                'link'=> 'https://www.freecodecamp.org/news/mongodb-quickstart-with-python/',
                'rating'=> 4,
                'review'=> 11,
                'subcategory_id'=> 16
              ],
              [
                'title'=> 'Welcome to Learn Git Branching',
                'link'=> 'https://learngitbranching.js.org/',
                'rating'=> 3,
                'review'=> 36,
                'subcategory_id'=> 17
              ],
              [
                'title'=> 'Git Handbook',
                'link'=> 'https://guides.github.com/introduction/git-handbook/',
                'rating'=> 4,
                'review'=> 56,
                'subcategory_id'=> 17
              ],
              [
                'title'=> 'Github Cheatsheet',
                'link'=> 'https://github.github.com/training-kit/downloads/github-git-cheat-sheet/',
                'rating'=> 2,
                'review'=> 21,
                'subcategory_id'=> 17
              ],
              [
                'title'=> 'visualizing-git',
                'link'=> 'http://git-school.github.io/visualizing-git/',
                'rating'=> 5,
                'review'=> 25,
                'subcategory_id'=> 17
              ],
              [
                'title'=> 'Learn Git',
                'link'=> 'https://www.codecademy.com/learn/learn-git',
                'rating'=> 4,
                'review'=> 23,
                'subcategory_id'=> 17
              ],
              [
                'title'=> 'Git Hint',
                'link'=> 'https://git-hint.netlify.app/',
                'rating'=> 3,
                'review'=> 29,
                'subcategory_id'=> 17
              ],
              [
                'title'=> 'Practical Git for Everyday Professional Use',
                'link'=> 'https://egghead.io/courses/practical-git-for-everyday-professional-use',
                'rating'=> 2,
                'review'=> 13,
                'subcategory_id'=> 17
              ],
              [
                'title'=> 'Git --everything-is-local',
                'link'=> 'https://git-scm.com/book/en/v2',
                'rating'=> 4,
                'review'=> 2,
                'subcategory_id'=> 17
              ],
              [
                'title'=> 'Become a git guru',
                'link'=> 'https://www.atlassian.com/git/tutorials',
                'rating'=> 3,
                'review'=> 16,
                'subcategory_id'=> 17
              ],
              [
                'title'=> 'Git Immersion',
                'link'=> 'https://gitimmersion.com/',
                'rating'=> 4,
                'review'=> 14,
                'subcategory_id'=> 17
              ],
              [
                'title'=> 'A SIMPLE GIT AND GITHUB TUTORIAL',
                'link'=> 'https://benjaminashbaugh.me/code/simple-git-github-tutorial',
                'rating'=> 2,
                'review'=> 19,
                'subcategory_id'=> 17
              ],
              [
                'title'=> 'What is agile methodology',
                'link'=> 'https://www.infoworld.com/article/3237508/what-is-agile-methodology-modern-software-development-explained.html',
                'rating'=> 1,
                'review'=> 17,
                'subcategory_id'=> 18
              ],
              [
                'title'=> 'What is Agile Software Development?',
                'link'=> 'https://www.visual-paradigm.com/scrum/what-is-agile-software-development/',
                'rating'=> 5,
                'review'=> 13,
                'subcategory_id'=> 18
              ],
              [
                'title'=> '12 Agile Manifesto principles: a culture, defined',
                'link'=> 'https://www.atlassian.com/agile/manifesto',
                'rating'=> 5,
                'review'=> 25,
                'subcategory_id'=> 18
              ],
              [
                'title'=> 'Scrum Tutorial',
                'link'=> 'https://www.knowledgehut.com/tutorials/scrum-tutorial',
                'rating'=> 4,
                'review'=> 8,
                'subcategory_id'=> 18
              ],
              [
                'title'=> 'Scrum learn agile software developement',
                'link'=> 'https://www.tutorialspoint.com/scrum/scrum_overview.htm',
                'rating'=> 5,
                'review'=> 45,
                'subcategory_id'=> 18
              ],
              [
                'title'=> 'Learn Kanban absolute beginner',
                'link'=> 'https://www.tutorialspoint.com/kanban/kanban_introduction.htm',
                'rating'=> 4,
                'review'=> 62,
                'subcategory_id'=> 18
              ],
              [
                'title'=> 'Waterfall software developement life cycle',
                'link'=> 'https://www.tutorialspoint.com/sdlc/sdlc_waterfall_model.htm',
                'rating'=> 3,
                'review'=> 21,
                'subcategory_id'=> 19
              ],
              [
                'title'=> 'Waterfall vs. Agile',
                'link'=> 'https://www.seguetech.com/waterfall-vs-agile-methodology/',
                'rating'=> 2,
                'review'=> 43,
                'subcategory_id'=> 19
              ],
              [
                'title'=> 'Waterfall Model: What Is It and When Should You Use It?',
                'link'=> 'https://airbrake.io/blog/sdlc/waterfall-model',
                'rating'=> 5,
                'review'=> 12,
                'subcategory_id'=> 19
              ],
              [
                'title'=> 'About npm',
                'link'=> 'https://docs.npmjs.com/about-npm/',
                'rating'=> 4,
                'review'=> 8,
                'subcategory_id'=> 20
              ],
              [
                'title'=> 'Introduction to npm and basic npm commands',
                'link'=> 'https://medium.com/beginners-guide-to-mobile-web-development/introduction-to-npm-and-basic-npm-commands-18aa16f69f6b',
                'rating'=> 2,
                'review'=> 7,
                'subcategory_id'=> 20
              ],
              [
                'title'=> 'NPM Getting started',
                'link'=> 'https://docs.npmjs.com/getting-started/',
                'rating'=> 5,
                'review'=> 42,
                'subcategory_id'=> 20
              ],
              [
                'title'=> 'An Absolute Beginner Guide to Using npm',
                'link'=> 'https://nodesource.com/blog/an-absolute-beginners-guide-to-using-npm/',
                'rating'=> 4,
                'review'=> 69,
                'subcategory_id'=> 20
              ],
              [
                'title'=> 'Yarnpkg getting started',
                'link'=> 'https://classic.yarnpkg.com/en/docs/getting-started',
                'rating'=> 4,
                'review'=> 85,
                'subcategory_id'=> 21
              ],
              [
                'title'=> 'Yarn: A new package manager for JavaScript',
                'link'=> 'https://engineering.fb.com/web/yarn-a-new-package-manager-for-javascript/',
                'rating'=> 4,
                'review'=> 126,
                'subcategory_id'=> 21
              ],
              [
                'title'=> 'Get Started with Docker',
                'link'=> 'https://www.docker.com/',
                'rating'=> 2,
                'review'=> 25,
                'subcategory_id'=> 22
              ],
              [
                'title'=> 'Docker for beginners',
                'link'=> 'https://docker-curriculum.com/',
                'rating'=> 1,
                'review'=> 42,
                'subcategory_id'=> 22
              ],
              [
                'title'=> 'What is Docker?',
                'link'=> 'https://opensource.com/resources/what-docker',
                'rating'=> 3,
                'review'=> 15,
                'subcategory_id'=> 22
              ],
              [
                'title'=> 'Docker orientation and setup',
                'link'=> 'https://docs.docker.com/get-started/',
                'rating'=> 5,
                'review'=> 8,
                'subcategory_id'=> 22
              ],
              [
                'title'=> 'Docker Tutorials | Learn2torials',
                'link'=> 'https://learn2torials.com/category/docker',
                'rating'=> 5,
                'review'=> 75,
                'subcategory_id'=> 22
              ],
              [
                'title'=> 'Getting Started with Docker',
                'link'=> 'https://serversforhackers.com/c/getting-started-with-docker',
                'rating'=> 4,
                'review'=> 2,
                'subcategory_id'=> 22
              ],
              [
                'title'=> 'Docker in Development',
                'link'=> 'https://serversforhackers.com/s/docker-in-development',
                'rating'=> 4,
                'review'=> 5,
                'subcategory_id'=> 22
              ],
              [
                'title'=> 'Secure Shell (SSH)',
                'link'=> 'https://searchsecurity.techtarget.com/definition/Secure-Shell',
                'rating'=> 2,
                'review'=> 11,
                'subcategory_id'=> 23
              ],
              [
                'title'=> 'ssh command in Linux with Examples',
                'link'=> 'https://www.geeksforgeeks.org/ssh-command-in-linux-with-examples/',
                'rating'=> 5,
                'review'=> 36,
                'subcategory_id'=> 23
              ],
              [
                'title'=> 'Intro to Networking - How to Establish a Connection Using SSH',
                'link'=> 'https://help.ui.com/hc/en-us/articles/218850057-Intro-to-Networking-How-to-Establish-a-Connection-Using-SSH',
                'rating'=> 5,
                'review'=> 56,
                'subcategory_id'=> 23
              ],
              [
                'title'=> 'React Native',
                'link'=> 'https://reactnative.dev/docs/tutorial',
                'rating'=> 4,
                'review'=> 21,
                'subcategory_id'=> 24
              ],
              [
                'title'=> 'Learn React Native absolute beginners',
                'link'=> 'https://www.tutorialspoint.com/react_native/index.htm',
                'rating'=> 4,
                'review'=> 25,
                'subcategory_id'=> 24
              ],
              [
                'title'=> 'React Native Tutorial: Building Android Apps with JavaScript',
                'link'=> 'https://www.raywenderlich.com/247-react-native-tutorial-building-android-apps-with-javascript',
                'rating'=> 3,
                'review'=> 23,
                'subcategory_id'=> 24
              ],
              [
                'title'=> 'A Cold Dive into React Native (Tutorial for Beginners)',
                'link'=> 'https://www.toptal.com/react-native/cold-dive-into-react-native-a-beginners-tutorial',
                'rating'=> 4,
                'review'=> 29,
                'subcategory_id'=> 24
              ],
              [
                'title'=> 'React Native Tutorial',
                'link'=> 'https://www.javatpoint.com/react-native-tutorial',
                'rating'=> 2,
                'review'=> 13,
                'subcategory_id'=> 24
              ],
              [
                'title'=> 'React Native Express',
                'link'=> 'http://www.reactnativeexpress.com/',
                'rating'=> 5,
                'review'=> 2,
                'subcategory_id'=> 24
              ],
              [
                'title'=> 'Introduction to react native',
                'link'=> 'https://reactnative.dev/docs/getting-started.html',
                'rating'=> 4,
                'review'=> 16,
                'subcategory_id'=> 24
              ],
              [
                'title'=> 'Mobile App Development with React - Online',
                'link'=> 'https://www.codingelements.com/course/mobile-app-development-with-react-online/',
                'rating'=> 3,
                'review'=> 14,
                'subcategory_id'=> 24
              ],
              [
                'title'=> 'Flutter Tutorial',
                'link'=> 'https://flutter.dev/docs/reference/tutorials',
                'rating'=> 2,
                'review'=> 19,
                'subcategory_id'=> 25
              ],
              [
                'title'=> 'Write your first Flutter app, part 1',
                'link'=> 'https://flutter.dev/docs/get-started/codelab',
                'rating'=> 4,
                'review'=> 17,
                'subcategory_id'=> 25
              ],
              [
                'title'=> 'Learn flutter absolute beginner',
                'link'=> 'https://www.tutorialspoint.com/flutter/index.htm',
                'rating'=> 3,
                'review'=> 13,
                'subcategory_id'=> 25
              ],
              [
                'title'=> 'Flutter Tutorial Part 1: Build a Flutter app from scratch',
                'link'=> 'https://medium.com/aviabird/flutter-tutorial-how-to-build-an-app-from-scratch-b88d4e0e10d7',
                'rating'=> 4,
                'review'=> 25,
                'subcategory_id'=> 25
              ],
              [
                'title'=> 'Getting Started with Flutter',
                'link'=> 'https://www.raywenderlich.com/4529993-getting-started-with-flutter',
                'rating'=> 2,
                'review'=> 8,
                'subcategory_id'=> 25
              ],
              [
                'title'=> 'Software Testing Methodologies',
                'link'=> 'https://smartbear.com/learn/automated-testing/software-testing-methodologies/',
                'rating'=> 1,
                'review'=> 45,
                'subcategory_id'=> 26
              ],
              [
                'title'=> 'Software Testing Methodologies - Learn The Methods & Tools',
                'link'=> 'https://www.inflectra.com/ideas/topic/testing-methodologies.aspx',
                'rating'=> 5,
                'review'=> 62,
                'subcategory_id'=> 26
              ],
              [
                'title'=> 'Unit Testing Tutorial: What is, Types, Tools, EXAMPLE',
                'link'=> 'https://www.guru99.com/unit-testing-guide.html',
                'rating'=> 5,
                'review'=> 21,
                'subcategory_id'=> 26
              ],
              [
                'title'=> 'Learn software testing terms',
                'link'=> 'https://www.tutorialspoint.com/software_testing_dictionary/unit_testing.htm',
                'rating'=> 4,
                'review'=> 43,
                'subcategory_id'=> 26
              ],
              [
                'title'=> 'Integration Testing Tutorial',
                'link'=> 'https://www.guru99.com/integration-testing.html',
                'rating'=> 5,
                'review'=> 12,
                'subcategory_id'=> 26
              ],
              [
                'title'=> 'What is Integration Testing  ?',
                'link'=> 'https://www.tutorialspoint.com/software_testing_dictionary/integration_testing.htm',
                'rating'=> 4,
                'review'=> 8,
                'subcategory_id'=> 26
              ],
              [
                'title'=> 'Integration Testing',
                'link'=> 'http://softwaretestingfundamentals.com/integration-testing/',
                'rating'=> 3,
                'review'=> 7,
                'subcategory_id'=> 26
              ],
              [
                'title'=> 'System Testing Tutorial',
                'link'=> 'https://www.guru99.com/system-testing.html',
                'rating'=> 2,
                'review'=> 42,
                'subcategory_id'=> 26
              ],
              [
                'title'=> 'What is System Testing  ?',
                'link'=> 'https://www.tutorialspoint.com/software_testing_dictionary/system_testing.htm',
                'rating'=> 5,
                'review'=> 69,
                'subcategory_id'=> 26
              ],
              [
                'title'=> 'System Testing',
                'link'=> 'http://softwaretestingfundamentals.com/system-testing/',
                'rating'=> 4,
                'review'=> 85,
                'subcategory_id'=> 26
              ],
              [
                'title'=> 'System Acceptance Tutorial',
                'link'=> 'https://www.guru99.com/user-acceptance-testing.html',
                'rating'=> 2,
                'review'=> 126,
                'subcategory_id'=> 26
              ],
              [
                'title'=> 'What is Acceptance Testing  ?',
                'link'=> 'https://www.tutorialspoint.com/software_testing_dictionary/acceptance_testing.htm',
                'rating'=> 5,
                'review'=> 25,
                'subcategory_id'=> 26
              ],
              [
                'title'=> 'Acceptance Testing',
                'link'=> 'http://softwaretestingfundamentals.com/acceptance-testing/',
                'rating'=> 4,
                'review'=> 42,
                'subcategory_id'=> 26
              ],
              [
                'title'=> 'Sanity Testing Vs Smoke Testing',
                'link'=> 'https://www.guru99.com/smoke-sanity-testing.html',
                'rating'=> 4,
                'review'=> 15,
                'subcategory_id'=> 26
              ],
              [
                'title'=> 'Smoke Testing',
                'link'=> 'http://softwaretestingfundamentals.com/smoke-testing/',
                'rating'=> 4,
                'review'=> 8,
                'subcategory_id'=> 26
              ],
              [
                'title'=> 'Performance Testing Tutorial',
                'link'=> 'https://www.guru99.com/performance-testing.html',
                'rating'=> 2,
                'review'=> 75,
                'subcategory_id'=> 26
              ],
              [
                'title'=> 'Performance Testing',
                'link'=> 'http://softwaretestingfundamentals.com/performance-testing/',
                'rating'=> 1,
                'review'=> 2,
                'subcategory_id'=> 26
              ],
              [
                'title'=> 'What is Usability Testing?',
                'link'=> 'https://www.guru99.com/usability-testing-tutorial.html',
                'rating'=> 3,
                'review'=> 5,
                'subcategory_id'=> 26
              ],
              [
                'title'=> 'What is WHITE Box Testing?',
                'link'=> 'https://www.guru99.com/white-box-testing.html',
                'rating'=> 5,
                'review'=> 11,
                'subcategory_id'=> 26
              ],
              [
                'title'=> 'What is BLACK Box Testing?',
                'link'=> 'https://www.guru99.com/black-box-testing.html',
                'rating'=> 5,
                'review'=> 36,
                'subcategory_id'=> 26
              ],
              [
                'title'=> 'What is Automated Testing?',
                'link'=> 'https://smartbear.com/learn/automated-testing/what-is-automated-testing/',
                'rating'=> 4,
                'review'=> 56,
                'subcategory_id'=> 26
              ],
              [
                'title'=> 'AUTOMATION TESTING Tutorial',
                'link'=> 'https://www.guru99.com/automation-testing.html',
                'rating'=> 4,
                'review'=> 21,
                'subcategory_id'=> 26
              ],
              [
                'title'=> 'Classifications of Testing Software',
                'link'=> 'https://amzotti.github.io/testing/2015/03/16/what-is-the-difference-between-a-test-runner-testing-framework-assertion-library-and-a-testing-plugin/',
                'rating'=> 2,
                'review'=> 25,
                'subcategory_id'=> 27
              ],
              [
                'title'=> 'JavaScript Testing',
                'link'=> 'https://www.udacity.com/course/javascript-testing--ud549',
                'rating'=> 5,
                'review'=> 23,
                'subcategory_id'=> 27
              ],
              [
                'title'=> 'JavaScript Unit Testing Frameworks',
                'link'=> 'https://www.guru99.com/javascript-unit-testing-frameworks.html',
                'rating'=> 5,
                'review'=> 29,
                'subcategory_id'=> 27
              ],
              [
                'title'=> 'Karma',
                'link'=> 'https://karma-runner.github.io/latest/index.html',
                'rating'=> 4,
                'review'=> 13,
                'subcategory_id'=> 27
              ],
              [
                'title'=> 'Getting started with Karma and Mocha for automated browser tests',
                'link'=> 'https://medium.com/@jazcodes/getting-started-with-karma-and-mocha-for-automated-browser-tests-5ebb6cd02edf',
                'rating'=> 4,
                'review'=> 2,
                'subcategory_id'=> 27
              ],
              [
                'title'=> 'Mocha simple, flexible, fun',
                'link'=> 'https://mochajs.org/',
                'rating'=> 3,
                'review'=> 16,
                'subcategory_id'=> 27
              ],
              [
                'title'=> 'A quick and complete guide to Mocha testing',
                'link'=> 'https://blog.logrocket.com/a-quick-and-complete-guide-to-mocha-testing-d0e0ea09f09d/',
                'rating'=> 4,
                'review'=> 14,
                'subcategory_id'=> 27
              ],
              [
                'title'=> 'How to test JavaScript with Mocha — The Basics',
                'link'=> 'https://codeburst.io/how-to-test-javascript-with-mocha-the-basics-80132324752e',
                'rating'=> 2,
                'review'=> 19,
                'subcategory_id'=> 27
              ],
              [
                'title'=> 'Jasmine Behavior-Driven JavaScript',
                'link'=> 'https://jasmine.github.io/',
                'rating'=> 5,
                'review'=> 17,
                'subcategory_id'=> 27
              ],
              [
                'title'=> 'Javascript — How to set up a testing environment with Jasmine and karma',
                'link'=> 'https://medium.com/bb-tutorials-and-thoughts/javascript-how-to-set-up-a-testing-environment-with-jasmine-and-karma-58591dd39734',
                'rating'=> 4,
                'review'=> 13,
                'subcategory_id'=> 27
              ],
              [
                'title'=> 'Cypress Test Runner',
                'link'=> 'https://www.cypress.io/',
                'rating'=> 3,
                'review'=> 36,
                'subcategory_id'=> 27
              ],
              [
                'title'=> 'Introduction to End-to-End Testing with Cypress.io',
                'link'=> 'https://webdevstudios.com/2018/11/13/end-to-end-testing-with-cypress-io/',
                'rating'=> 2,
                'review'=> 21,
                'subcategory_id'=> 27
              ],
              [
                'title'=> 'Ava Test Runner',
                'link'=> 'https://pusher.com/sessions/meetup/the-js-roundabout/ava-test-runner-a-fresh-take-on-javascript-testing-and-growing-an-open-source-project',
                'rating'=> 4,
                'review'=> 14,
                'subcategory_id'=> 27
              ],
              [
                'title'=> 'How you can test your Node.js applications with Ava.js',
                'link'=> 'https://www.freecodecamp.org/news/testing-your-nodejs-applications-with-ava-js-99e806a226a7/',
                'rating'=> 3,
                'review'=> 78,
                'subcategory_id'=> 27
              ],
             
          
        ]);
  }
 }
