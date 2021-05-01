const container = document.querySelector(".container");
const seats = document.querySelectorAll(".row .seat:not(.occupied)");
const count = document.getElementById("count");
const total = document.getElementById("total");
const movieSelect = document.getElementById("movie");

let ticketPrice = +movieSelect.value;

//save Selected movie index and price
function SelectedMovieData(movieIndex, moviePrice) {
	localStorage.setItem("selectedMovieIndex", movieIndex);
	localStorage.setItem("selectedMoviePrice", moviePrice);
}

//function update total and count
function updateSelectedCount() {
	const selectedSeats = document.querySelectorAll(".row .seat.selected");

	const seatsIndex = [...selectedSeats].map((seat) => [...seats].indexOf(seat));
	localStorage.setItem("selectesSeats", JSON.stringify(seatsIndex));

	const selectedSeatsCount = selectedSeats.length;
	count.innerText = selectedSeatsCount;
	total.innerText = selectedSeatsCount * ticketPrice;
}

//movie select event
movieSelect.addEventListener("change", (e) => {
	ticketPrice = +e.target.value;
	SelectedMovieData(e.target.selectedIndex, e.target.value);
	updateSelectedCount();
});

container.addEventListener("click", function(e) {
	if (
		e.target.classList.contains("seat") &&
		!e.target.classList.contains("occupied")
	) {
		e.target.classList.toggle("selected");
		updateSelectedCount();
	}
});
