[![Review Assignment Due Date](https://classroom.github.com/assets/deadline-readme-button-22041afd0340ce965d47ae6ef1cefeee28c7c493a6346c4f15d667ab976d596c.svg)](https://classroom.github.com/a/gjVCUa4e)
Create a PHP-based graduate school application consisting of the following pages:

* Prompt the user for their first and last names. Provide a submit button that sends the information to the server for processing.
* Display the applicant's name at the top of the next page that includes a check list of courses that include at least: Object-oriented programming, Systems analysis & design, Advanced programming, Introduction to Networking, Introduction to Computer Security.  Allow the end-user to select their courses from the list and submit the information.

* On the next page, display a personal accomplishments form that allows them to type free-form text into an essay-question-style input and submit.

* Create a confirmation page based on all of the information from the previous pages. Display the name, courses, and accomplishments for confirmation. When the user confirms the information they are sent to the results page.  
* The results page must display "you are accepted for an phone interview" or "sorry, your application was rejected" based on the current search requirements (they must have taken at least half of the courses and we are looking for "PHP" in the accomplishments).

You must use sessions. HTTP is a stateless protocol, so the data cannot be collected, displayed, or analyzed otherwise.

You must use a custom function that returns a boolean given the accomplishments and two integers (num courses listed, num courses taken). This function will search within the accomplishments for "PHP" and the determine if the course percentage meets the current threshold (>= 50%). This function will encapsulate the hard-coded search string and 50% (which would make it easy to swap 50% for a different figure in the future).

