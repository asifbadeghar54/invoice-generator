// sample calendar events data
'use strict'
var curYear = moment().format('YYYY');
var curMonth = moment().format('MM');
// Calendar Event Source
var sptCalendarEvents = {
	id: 1,
	events: [{
		id: '1',
		start: curYear + '-' + curMonth + '-02T09:00:00',
		end: curYear + '-' + curMonth + '-02T13:00:00',
		title: 'Spruko Meetup',
		Color: '#fff ',
		backgroundColor: '#214fbe ',
		borderColor: '#214fbe ',
		description: 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary'
	}, {
		id: '2',
		start: curYear + '-' + curMonth + '-12T09:00:00',
		end: curYear + '-' + curMonth + '-12T17:00:00',
		title: 'Design Review',
		backgroundColor: '#214fbe',
		borderColor: '#214fbe',
		description: 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary'
	}, {
		id: '3',
		start: curYear + '-' + curMonth + '-13T12:00:00',
		end: curYear + '-' + curMonth + '-13T18:00:00',
		title: 'Lifestyle Conference',
		backgroundColor: '#214fbe',
		borderColor: '#214fbe',
		description: 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary'
	}, {
		id: '4',
		start: curYear + '-' + curMonth + '-21T07:30:00',
		end: curYear + '-' + curMonth + '-21T15:30:00',
		title: 'Team Weekly Brownbag',
		backgroundColor: '#214fbe',
		borderColor: '#214fbe',
		description: 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary'
	}, {
		id: '5',
		start: curYear + '-' + curMonth + '-04T10:00:00',
		end: curYear + '-' + curMonth + '-06T15:00:00',
		title: 'Music Festival',
		backgroundColor: '#214fbe',
		borderColor: '#214fbe',
		description: 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary'
	}, {
		id: '6',
		start: curYear + '-' + curMonth + '-23T13:00:00',
		end: curYear + '-' + curMonth + '-23T18:30:00',
		title: 'Attend Lea\'s Wedding',
		backgroundColor: '#214fbe',
		borderColor: '#214fbe',
		description: 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary'
	}]
};
// Birthday Events Source
var sptBirthdayEvents = {
	id: 2,
	backgroundColor: '#e54d26',
	borderColor: '#e54d26',
	events: [{
		id: '7',
		start: curYear + '-' + curMonth + '-04T18:00:00',
		end: curYear + '-' + curMonth + '-04T23:30:00',
		title: 'Harcates Birthday',
		backgroundColor: '#e54d26',
		borderColor: '#e54d26',
		description: 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary'
	}, {
		id: '8',
		start: curYear + '-' + curMonth + '-28T15:00:00',
		end: curYear + '-' + curMonth + '-28T21:00:00',
		title: 'Jinnysin\'s Birthday',
		description: 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary'
	}, {
		id: '9',
		start: curYear + '-' + curMonth + '-31T15:00:00',
		end: curYear + '-' + curMonth + '-31T21:00:00',
		title: 'Lee shin\'s Birthday',
		description: 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary'
	}]
};
var sptHolidayEvents = {
	id: 3,
	backgroundColor: 'rgb(38, 156 ,142)',
	borderColor: 'rgb(38, 156 ,142)',
	events: [{
		id: '10',
		start: curYear + '-' + curMonth + '-05',
		end: curYear + '-' + curMonth + '-08',
		title: 'Festival Day'
	}, {
		id: '11',
		start: curYear + '-' + curMonth + '-18',
		end: curYear + '-' + curMonth + '-19',
		title: 'Memorial Day'
	}, {
		id: '12',
		start: curYear + '-' + curMonth + '-25',
		end: curYear + '-' + curMonth + '-26',
		title: 'Diwali'
	}]
};
var sptOtherEvents = {
	id: 4,
	backgroundColor: 'rgb(38, 156 ,142)',
	borderColor: 'rgb(38, 156 ,142)',
	events: [{
		id: '13',
		start: curYear + '-' + curMonth + '-07',
		end: curYear + '-' + curMonth + '-09',
		title: 'My Rest Day'
	}, {
		id: '13',
		start: curYear + '-' + curMonth + '-29',
		end: curYear + '-' + curMonth + '-31',
		title: 'My Rest Day'
	}]
};