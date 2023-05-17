<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $articles = [
            [
                'title' => 'Dependencies handling on NPM projects',
                'body' => "Working in frontend means working mainly in JavaScript. And working with big JavaScript projects means also working with other libraries (from now on dependencies or packages) that allows developing from scratch some features that have been already developed by other developers. This libraries are called dependencies in the Node world and it consists of all the packages that are used in the project. Managing this dependencies (and specially their versions) is a hard and a complex task to be done manually.

                It's been a while since these libraries stopped being hosted in isolated server to be hosted and specially managed by a centrallized system called NPM (node package manager), created by Node. From those developer who have worked with Java, it's kind of Maven, but in the JavaScript world with the difference that their are all hosted in a centrar repository. NPM allow us to manage both monorepo and multirepo projects to define and configure, along other settings, the depedencies of the project.
                
                Today we're gonna talk about how to manage these dependencies, how many types there are and specially how to handle the versions of this packages, which is, in fact, the main topic of this article.
                
                Before starting, we need to locate ourselves: all we are talking about today it's located in the package.json file (once again, for those know the Java world, it would be the equivalent to the pom.xml file). This file manages all the NPM related project info and settings, and is very very long and complex in someway. That's why today we will focus 'only' in dependencies
                
                All dependencies defined in package.json will be automatically handled (and probably downloaded, depending of its type) by NPM when running the command npm install.
                
                It's important to clarify that this article aims to summarize all the information available to the topics described before, that's why all the information you will find here is based mainly in the one available in the official documentation page of NPM among other articles and sources from the internet that you can consult in the bibliography",
                'image_url' => 'http://localhost:8000/storage/images/image_1684214633.jpg',
                'keywords' => 'NODE.JS:',
                'author' => 'Russell Masato',
                'created_at' => '2023-05-16 05:23:53',
                'updated_at' => '2023-05-16 05:23:53',
            ],
            [
                'title' => 'Ever wanted to build a custom react hook?',
                'body' => "What are React hooks?
                React hooks are functions in react stateless components that let you create and update a state without having to use class components, when building React frontend apps using functional or stateless components is usually preferred over class components for smaller Components.
                
                Let's look at an example.
                
                import React, { useState } from 'react';
                function StatelessCount( ) {
                  const [ count , setCounter ] = useState( 0 );
                  return (
                    <div>
                      <p>You clicked me {count} times</p>
                      <button onClick={ () => setCounter( count + 1 ) }>
                        Click me, please!
                      </button>
                    </div>
                  );
                }
                What are custom react hooks?
                While building React applications at scale, we need to share logic among components, an example would be we want a couple of components to be aware of a certain change in an app, a direct example would be building a social media application and we want to let multiple components on a friends list page or friend page know if a user is online so we can render a different view to our user, making that logic in each component would be hard and clunky mainly because that logic can always change later during the development of the application, so we would like to do it one time in an isolated place that I can be edited or changed and imported into our components.
                
                Before we look at custom hooks let's look at 2 other ways of doing this, they both are higher-order components and render props.",
                'image_url' => 'http://localhost:8000/storage/images/image_1684271910.png',
                'keywords' => 'TYPESCRIPT:REMOTE WORKING:',
                'author' => 'Russell Masato',
                'created_at' => '2023-05-16 21:18:30',
                'updated_at' => '2023-05-16 21:18:30',
            ],
            [
                'title' => 'Creating a React Project Using Vite Pre-bundler',
                'body' => "Creating a React Project Using Vite Pre-bundler

                Vite is a frontend tool built to offer a leaner and faster development ambiance for modern web applications. Vite is made up of 2 main parts;
                
                A build command. This packages your code with Rollup. It has been preconfigured to ensure the output of highly improved static assets for production.
                A dev server. This gives opulent feature enrichments over the native ES modules, for example, Hot Module Replacement (HMR) which is extremely fast. Requirements; You are required to install the following software before creating a Vite project;
                Node.js (v 14.18+). To check whether you have Node installed, run node –v in the terminal. Please upgrade if your package manager throws a warning.
                Npm / Yarn. These software are mandatory for creating Vite projects. With the introduction of ES modules in ES2015, many browsers had poor support for ES6 modules. Nowadays, modern browsers support ES modules which allow developers to use the export and import statements natively. In native ES, the import is supposed to get either an absolute or relative URL because it has poor support for bare module imports, for example: Import { someMethod ) from ‘my-dep’
                Since the above line of code throws an error because most of the browsers have poor support for ES6 modules, we are left to wonder how Vite handles this. Vite is automatically able to detect bare module imports from your source files prompting it to perform the following actions;
                
                - Vite will pre-bundle your source files to haste page loading and convert UMD modules/ CommonJS to ESM.
                - Vite will rewrite the imports to valid URLs to allow browsers to import modules without having to throw errors.
                    Creating a project
                Creating a Vite project will require you to open your terminal and navigate to the repository where you will save your Vite program. Run npm create vite@latest. This command prompts you to give a name to your app. The default name for your app is vite-project. You can change this name to suit the project you are making. Running the above command prompts you to vite.new/{template} pick a template and variant to use.",
                'image_url' => 'http://localhost:8000/storage/images/image_1684272888.png',
                'keywords' => 'SCALA:TYPESCRIPT:GO:',
                'author' => 'Leo Masaki',
                'created_at' => '2023-05-16 21:34:48',
                'updated_at' => '2023-05-16 21:34:48',
            ],
            [
                'title' => 'React: Understand what a hook is',
                'body' => "These last months I have seen that many people from my team were a bit confused about how the hooks work in our React Native application. In this post I’m going to answer some basic questions about them and I will show some examples to make it clearer.

                What’s a hook?
                A hook is a simple function that allows you to access the React Framework. That means that we get access to another hooks, for example useState, useEffect, useLayoutEffect, useMemo, useCallback, useImperativeHandle, etc… You might want to check all the hooks that React provide us. Check them out here.
                
                Do I need to use hooks?
                No. But I really encourage you to try them if you haven’t done it yet. They will open up a range of possibilities, improving your React or React Native application, avoiding duplications, and making your code cleaner, more readable and organized.
                
                Do I need to know anything before using them?
                The most important things that you need to be clear about are these:
                
                Hooks are only available for functional components, not for classes. If you are not familiar with functional components, read about them first here.
                Hooks must use the use prefix keyword. For example, useLoggedUser, useConnection, useBluetoothListener, etc. Just remember to add the use prefix when declaring a hook function.
                Hooks are backwards-compatible. You can start using them in your new components and be sure that everything will continue working as before. At some point you might want to migrate those class components to functional components where you consider to use hooks. You can create your own hooks defining a piece of logic and reusing it throughout your app.",
                'image_url' => 'http://localhost:8000/storage/images/image_1684273187.jpeg',
                'keywords' => 'TYPESCRIPT:PYTHON:C#:NODE.JS:',
                'author' => 'Leo Masaki',
                'created_at' => '2023-05-16 21:39:47',
                'updated_at' => '2023-05-16 21:39:47',
            ],
            // Add more articles as needed
        ];
        
        DB::table('articles')->insert($articles);
    }
}
