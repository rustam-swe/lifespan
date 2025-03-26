# L I F E S P A N

# Have you ever think about your life stats like it is in video games ?

# Now we offer this chance especially for you by this project ! 

# Thanks for your CONGRATULATIONS }:) 

# Run your localhost in order to launch the project :
```bash
php localhost:< port number >
```
# Enter your birthday ( YYYY.MM.DD ) and you are guaranteed to be SHOCKED !

# Section Work :
-> Calculation process of working time :
# 1) The 1st Step -> Declaring variables :
   To begin with, the number of work-days must be assigned so that the quantity of weeks those people have to work in can be declared accordingly.
For the project, the number of work-days in aweek is agreed to be 5 days as avarage work-days in a week. In accordance with the quantity of work-days in a week, avarage number of weeks that people work in is declared to be 50 weeks in a year and at the same time weekends and the rest of the weeks in a year are considered as day-offs and excluded from calculation process. So people work 5 days in a week but there ist a case that avarage daily working hours differs  between cetain age periods. As an example, anvarage daily working hours between the ages of 18 and 24 is about 4 hours as they have to spent significant  amount of time on their study during this periodand etc (25-54 ages => 8 years, 54-65 ages => 7 years, 65-75 ages => 5 years). 
# 2) The 2nd Step -> year based calculation : 
   In calculation process, multiplication of 5 workdays in a week * 50  working weeks in a year represents the quantity of annual working days.
 In order to get final result, the daily working hours those are different from each other according to periods must be multiplied to annual working days and this action calculated for each period until the process reaches to the situation that the age fits into certain interval of ages and all multiplications are added in the end. 
# 3) The 3rd Step -> including odd months and days from year :
 To improve the percision, in case there are some months or days left from age/year-based calculation, the number of odd months are multiplied to division of annual working days to 12, so that avarage monthly working days can be found out and added to left days from both of year and month. Following steps leads to multiplication of total odd days to the daily working hours that is suitable to age period.  
# 4) The 4th Step -> calculation results :
   The results from 3rd and 4th steps are added each other as a final result of the hours spent on work till now. Avarage time spent on work in lifespan can be calculated by addition of multiplications of age periods, annual working days and periodically suitable daily woking hours. The time left tha can be spent on work in future is equal to subtraction of total hours spent on work from avarage hours spent on work in lifespan.
# 5) The 5th step: -> considering edge keys :
End of the periods is valued as 75 and logic conflicts may occur when users are older than 75 years old . As a solution, congratulation statement is included that is returned instead of time left to work in future when it comes to users older than 75 years old. 
# 6) Source of statistics :
-> https://www.bls.gov/charts/american-time-use/activity-by-age.htm
-> https://ourworldindata.org/time-use
