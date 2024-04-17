# TalentGrowth Technical Case Study

Application: **Laravel Engineer** at **NineFoxLab**

## Introduction

Because of the Laravel Engineer job title at NineFoxLab, I decided to write the technical case study code in PHP with **Laravel** framework for both backend and frontend. On the frontend side, it uses **Bootstrap** CSS framework with **Blade** templating engine by Laravel. Hence, there's no separation of code between the backend side and the frontend side (the most common coding convention of PHP-based web projects).

## App Overview

I name this simple app **JobHunter** with two features:

1. Job application (directly accessible at **/** route) that contains several input fields needed to apply for a job. Company name can be specified via URL parameter (key: `company`) or **NineFoxLab** for the default
2. Application submission (when finished applying for a job i.e. clicking the **Submit** button) that contains the details of the job application, from the submitted form data

## Technical Details

1. There are only two significant routes, (`/app/form` and `/app/apply`). The first route is directly accessible via the web browser and it displays the job application page with given inputs. Then the second route is accessible when submitting the form at the previous route and it shows the job application details according to the form input. The default route `/` is redirected to `/app/form` (for more details see `routes/web.php`)

2. The validation flow uses Laravel's built-in form validation mechanism (by using the `validate()` method of a `Request` object). Below is the list of form inputs with their validation rules:

    - **Name**: required, only alphabetical (both lowercase and uppercase), dot, single quote, dash, and space characters are allowed. Validated using regular expression rule
    - **Gender**: required, only `Male` or `Female` is allowed
    - **E-mail**: required, valid email format
    - **Phone**: required, only numbers, dashes, plus (+) sign, brackets, and spaces are allowed. Validated using regular expression rule
    - **Address**: required, no specific rules
    - **Position**: required, no specific rules
    - **Salary Expectation**: required, a number greater than or equal to 0 and multiply of 50000
    - **Experience**: required, a number greater than or equal to 0
    - **Curriculum Vitae**: required, only URL's are allowed (HTTP/HTTPS)
    - **Portfolio**: optional, only URL's are allowed (HTTP/HTTPS)
    
    The validation code can be seen at `app/Http/Controllers/AppController.php` controller in `apply()` method

3. Two reusable components exist to help ease the process of writing the frontend code, that is, `x-required` and `x-error`. The first component shows the red asterisk symbol that is inserted at the end of a form label, indicating that user is required to fill the corresponding form input. And then the second component renders an error message usually as the result of form validations. Both components exist at `app/View/Components` for the definition and `resources/views/components` for the HTML representation of the component
