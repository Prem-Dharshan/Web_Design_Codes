function max_date(dates) {
	const maxDate = new Date(
		Math.max.apply(
			null,
			dates.map(function (date) {
				return new Date(date);
			})
		)
	);
	return maxDate.toISOString().split("T")[0];
}

console.log(max_date(["2015/02/01", "2015/02/02", "2015/01/03"]));
