/* ============ CLOCK ============ */
const hour = document.getElementById("clock-hour");
const minutes = document.getElementById("clock-minutes");
const seconds = document.getElementById("clock-seconds");

const clock = () => {
	let date = new Date();

	let hh = date.getHours() * 30,
		mm = date.getMinutes() * 6,
		ss = date.getSeconds() * 6;

	// we add a rotation to the elements
	hour.style.transform = `rotateZ(${hh + mm / 12}deg)`;
	minutes.style.transform = `rotateZ(${mm}deg)`;
	seconds.style.transform = `rotateZ(${ss}deg)`;
};

setInterval(clock, 1000); // 1000 = 1s

/* =============== CLOCK & DATE TEXT ================ */
const textHour = document.getElementById("text-hour");
const textMinutes = document.getElementById("text-minutes");
const textAmPm = document.getElementById("text-ampm");
const dateDay = document.getElementById("date-day");
const dateMonth = document.getElementById("date-month");
const dateYear = document.getElementById("date-year");

const clockText = () => {
	let date = new Date();

	let hh = date.getHours(),
		ampm,
		mm = date.getMinutes(),
		day = date.getDate(),
		month = date.getMonth(),
		year = date.getFullYear();

	// we change the hours 24 to 12
	if (hh >= 12) {
		hh = hh - 12;
		ampm = "PM";
	} else {
		ampm = "AM";
	}

	// we detect when it's 0 AM transform to 12 AM
	if (hh == 0) {
		hh = 12;
	}
	// show a zero before hours
	if (hh < 10) {
		hh = `0${hh}`;
	}

	// show a zero before the minutes
	if (mm < 10) {
		mm = `0${mm}`;
	}
	// show minutes
	textMinutes.innerHTML = mm;

	// show time
	textHour.innerHTML = `${hh}:`;

	// show am or pm
	textAmPm.innerHTML = ampm;

	// we get month of the year and show it
	let months = [
		"Jan",
		"Feb",
		"Mar",
		"Apr",
		"May",
		"Jun",
		"Jul",
		"Aug",
		"Sep",
		"Oct",
		"Nov",
		"Dec",
	];

	// we show the day, the month and the year
	dateDay.innerHTML = day;
	dateMonth.innerHTML = `${months[month]}`;
	dateYear.innerHTML = year;
};
setInterval(clockText, 1000); // 1000 = 1s
