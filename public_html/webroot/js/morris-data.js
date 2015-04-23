$(function() {
    Morris.Donut({
        element: 'morris-donut-chart',
        data: [{
            label: "WTCR.ca",
            value: 28
        }, {
            label: "Amazon",
            value: 10
        }, {
            label: "eBay",
            value: 18
        }, {
			label: "Kijiji",
			value: 8
		}],
        resize: true
    });

});