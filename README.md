![PHP](https://img.shields.io/badge/PHP-Backend-blue) 
![Apache](https://img.shields.io/badge/Apache-Web%20Server-orange) 
![HTML](https://img.shields.io/badge/HTML-Frontend-yellow) 
![CSS](https://img.shields.io/badge/CSS-Frontend-blue) 
![Docker](https://img.shields.io/badge/Docker-Containerization-blue) 
# Crypto Converter

## Table of Contents

- [Description](#description)
- [Technologies Used](#technologies-used)
- [Features](#features)
- [Setup](#setup)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
- [Usage](#usage)
  - [Local](#local)

## Description

**Crypto Converter** is a  PHP application that allows users to convert amounts between different cryptocurrencies. 
## Technologies Used

![PHP](https://img.shields.io/badge/PHP-Backend-blue) 
![Apache](https://img.shields.io/badge/Apache-Web%20Server-orange) 
![HTML](https://img.shields.io/badge/HTML-Frontend-yellow) 
![CSS](https://img.shields.io/badge/CSS-Frontend-blue) 
![Docker](https://img.shields.io/badge/Docker-Containerization-blue) 

## Features

- Convert amounts from one cryptocurrency to another.
- Simple and intuitive user interface.
- Input validation.

## Setup

### Prerequisites

Make sure you have the following installed:

- **Docker**

  To start a server with PHP and Apache, run the following command:

  ```bash
  docker run -it --rm --name my-running-server -v "${PWD}:/var/www/html" -w /var/www/html -p 8081:80 php:8.2-apache
