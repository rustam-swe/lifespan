# L I F E S P A N

## Have You Ever Thought About Your Life Stats Like in a Video Game?

Now you can explore your life statistics with the **Lifespan Calculator**! This project offers you a unique chance to see how much time you’ve spent—and will spend—on activities like sleeping, working, spending time with family, eating, traveling, and studying. Enter your birthday, and you’re **guaranteed to be SHOCKED** by the results! 😱

---

## Features

- **Interactive Stats**: Calculate time spent on key life activities:
  - Sleep (`Sleep Time`)
  - Work (`Work Time`)
  - Family Time (`Family Time`)
  - Travel (`Road Time`)
  - Eating (`Eating Time`)
  - Studying (`Study Time`)
- **Detailed Breakdown**: See total, average, and remaining time in hours, days, and years.
- **Stunning Design**: Built with Bootstrap 5, Font Awesome icons, and custom glassmorphism styles.
- **Smooth Animations**: Hover effects on buttons and stat cards for a polished user experience.
- **Session Support**: Your last entered birthday is saved for convenience.

---

## Installation

Follow these steps to set up the Lifespan Calculator locally:

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/rustam-swe/lifespan.git
   cd lifespan-calculator
   ```

2. **Install Dependencies**:
   Ensure you have [Composer](https://getcomposer.org/) installed, then run:
   ```bash
   composer install
   ```

3. **Run the Application**:
   Start the PHP development server (replace `<port number>` with your preferred port, e.g., `8000`):
   ```bash
   php -S localhost:<port number>
   ```

4. **Access the App**:
   Open your browser and navigate to:
   ```
   http://localhost:<port number>
   ```

---

## Usage

1. **Enter Your Birthday**:
   - On the homepage, input your date of birth in the format `YYYY-MM-DD` (e.g., `1990-01-01`).
   - Click the "Submit" button.

2. **View Your Life Stats**:
   - You’ll be redirected to the results page, where you’ll see your lifespan statistics.
   - Example: "Total family time: 72166 hours", "Average work time: 208.28 hours", and more.
   - Use the "Back to Form" button to try a different date.

3. **Edge Cases**:
   - If you’re over 75 years old, the app will congratulate you instead of showing remaining time.
   - Invalid inputs (e.g., empty date) will display an error message like "Date of birth is required."

---

## How It Works: Work Time Calculation

Here’s a detailed breakdown of how the "Work Time" statistics are calculated:

### 1. Declaring Variables
   - **Work Days**: We assume an average of 5 workdays per week.
   - **Work Weeks**: People work 50 weeks per year (excluding weekends and holidays).
   - **Daily Work Hours by Age**:
     - Ages 18–24: 4 hours/day (due to study commitments).
     - Ages 25–54: 8 hours/day.
     - Ages 55–65: 7 hours/day.
     - Ages 65–75: 5 hours/day.

### 2. Year-Based Calculation
   - Annual work days = 5 workdays/week × 50 weeks/year = 250 days.
   - For each age period, multiply the annual work days by the daily work hours and the number of years in that period.
   - Add the results for all periods up to the user’s current age.

### 3. Including Odd Months and Days
   - To improve precision, we account for remaining months and days:
     - Odd months are converted to days (annual work days ÷ 12 × months).
     - Add remaining days from the year and month.
     - Multiply the total odd days by the daily work hours for the current age period.

### 4. Final Results
   - **Total Work Time**: Sum of hours from year-based and odd days calculations.
   - **Average Work Time**: Total work hours divided by the user’s age.
   - **Remaining Work Time**: Subtract total work hours from the average lifespan work hours (calculated for 75 years).

### 5. Edge Cases
   - If the user is over 75 years old, a congratulatory message is shown instead of remaining work time.

### 6. Data Sources
   - [Bureau of Labor Statistics: American Time Use Survey](https://www.bls.gov/charts/american-time-use/activity-by-age.htm)
   - [Our World in Data: Time Use](https://ourworldindata.org/time-use)

---

## Project Structure

```
lifespan-calculator/
├── src/
│   ├── Controllers/      # Controller classes (Family, Work, Sleep, etc.)
│   ├── Core/             # Core logic (Person, Calculation, etc.)
│   └── Interfaces/       # Interface definitions
├── views/                # View templates (form.php, results.php, etc.)
├── styles/               # Custom CSS (styles.css with glassmorphism)
├── vendor/               # Composer dependencies
├── composer.json         # Composer configuration
└── index.php             # Entry point and router
```

---


Enjoy exploring your life stats with Lifespan Calculator! 🎮

