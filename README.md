<p></p>
<h1 style="font-weight:bold">The Backend for News App Test Project</h1>

## About Project
<h4>1. User authentication and registration:</h4>

Users are able to create an account and log in to the website to save their preferences and settings.

<h4>2. Article search and filtering</h4>

Users are able to search for articles by keyword and filter the results

<h4>3. Personalized news feed</h4>

Users are able to customize their news feed by selecting their preferred categories.

News are provided from Javascript Jobs site.(https://jsjobbs.com)

<h4>4. Mobile-responsive design</h4>

The website should be optimized for viewing on mobile devices.

## How to run backend of News App Test Project

Docker is required for this project.

1. docker build -t laravel-backend-api .
2. docker container ls -a<br/>
You can see some information of container's you have created using docker build.<br/>
You have to look at CONTAINER ID in which IMAGE name is "api-main"<br/>
3. docker exec -it [CONTAINER ID] sh<br/>
This opens shell command.<br/>
On the shell command prompt, you have to run these 2 instructions to work with database.<br/>

php artisan migrate<br/>
php artisan db:seed

Then, close the shell.<br/>
4. docker-compose up

You have already finished running laravel backend api for News App.

Base Api url is localhost:8001

You can use this api to manage users and articles in react front end of this App.

for example:

http://localhost:8001/api/auth/login(or register)

http://localhost:8001/api/articles/insert(or get_all)
