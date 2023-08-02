// Sample data for upcoming dates, theaters, and showtimes
const upcomingDates = [    
    { date: '11', day: 'Tue' },
    { date: '12', day: 'Wed' },
    { date: '13', day: 'Thu' },
    { date: '14', day: 'Fri' },
    { date: '15', day: 'Sat' },
    { date: '16', day: 'Sun' },
    { date: '17', day: 'Mon' },
  ];
  
  const theaters = [
    { id: 1, name: 'Majestic Cineplex' },
    { id: 2, name: 'SS Cinema' },
    { id: 3, name: 'PVR Cinema' }
  ];
  
  const showtimes = [
    { theaterId: 1, time: '09:00 AM' },
    { theaterId: 1, time: '12:00 PM' },
    { theaterId: 1, time: '03:00 PM' },
    { theaterId: 2, time: '10:00 AM' },
    { theaterId: 2, time: '01:00 PM' },
    { theaterId: 2, time: '04:00 PM' },
    { theaterId: 3, time: '11:00 AM' },
    { theaterId: 3, time: '02:00 PM' },
    { theaterId: 3, time: '05:00 PM' }
  ];
  
  // Get the necessary elements from the DOM
  const buyTicketsBtn = document.getElementById('buyTicketsBtn');
  const dateContainer = document.getElementById('dateContainer');
  const theaterContainer = document.getElementById('theaterContainer');
  
  // Add click event listener to "Buy Tickets" button
  buyTicketsBtn.addEventListener('click', showUpcomingDates);
  
  // Function to show the upcoming dates as small boxes
  function showUpcomingDates() {
    dateContainer.innerHTML = ''; // Clear previous content
  
    upcomingDates.forEach(date => {
      const dateBox = document.createElement('div');
      dateBox.classList.add('dateBox');
      dateBox.textContent = `${date.date}, ${date.day}`;
      dateBox.addEventListener('click', () => showTheaters(date.date));
      dateContainer.appendChild(dateBox);
    });
  }
  
  // Function to show the available theaters and showtimes for a selected date
  function showTheaters(selectedDate) {
    theaterContainer.innerHTML = ''; // Clear previous content
  
    const theatersByDate = getTheatersByDate(selectedDate);
  
    theatersByDate.forEach(theater => {
      const theaterBox = document.createElement('div');
      theaterBox.classList.add('theaterBox');
      theaterBox.textContent = theater.name;
      theaterContainer.appendChild(theaterBox);
  
      const showtimesByTheater = getShowtimesByTheater(selectedDate, theater.id);
      showtimesByTheater.forEach(showtime => {
        const showtimeElement = document.createElement('p');
        showtimeElement.textContent = showtime.time;
        theaterContainer.appendChild(showtimeElement);
      });
    });
  }
  
  // Helper function to get theaters available for a specific date
  function getTheatersByDate(selectedDate) {
    return theaters; // You can implement logic to filter theaters based on availability for the selected date
  }
  
  // Helper function to get showtimes for a specific date and theater
  function getShowtimesByTheater(selectedDate, theaterId) {
    return showtimes.filter(showtime => showtime.theaterId === theaterId); // You can implement logic to filter showtimes based on the selected date and theater
  }
  
  
  