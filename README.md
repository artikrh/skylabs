# SkyLabs [![License](https://img.shields.io/badge/License-Apache%202.0-blue.svg)](https://opensource.org/licenses/Apache-2.0)

Sky-Labs.co is a web application written in PHP using the MVC framework which gathers spaceflight information to project launch schedules around the world.

## Project Scope 

The main aim of this project was the development and implementation of an online platform which displays comprehensible information on every rocket launch scheduled to take place.

There are a number of potential considerations to be looked at:
* Public/private sector schedules;
* Listing spaceports around the world;
* Providing live stream videos if available;
* Other technical information about the specific flight.

## Model Analysis

The fundamental principle of the challenge was the ability to fetch data from open APIs (Application Programmable Interfaces), process information and display it to the end user.

The process flow takes place in this order:
1. Upon opening the web platform, the client makes a HTTP (HyperText Transfer Protocol)
GET request to the server (spacelaunchnow.me) which provides relevant data
2. The server then performs a lookup in its real time database for rocket launch information
3. The server responds with a JSON (JavaScript Object Notation) format which is sent back
to the client
4. The client processes data and displays them in human readable format

![Process flow](https://i.imgur.com/SVddTaw.png)

## Documentation
Full documentation can be found [here](https://drive.google.com/open?id=1rj4F0hzbjlx6vkzm1hHqxRZvurx4yuNj).
