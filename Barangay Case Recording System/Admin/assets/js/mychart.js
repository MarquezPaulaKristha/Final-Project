var ctx = document.getElementById('myChart').getContext('2d');
var cases = document.getElementById('cases').getContext('2d');

        var myChart = new Chart(ctx, {
            type: 'polarArea',
            data: {
                labels: ['Pending', 'Ongoing', 'Solved'],
                datasets: [{
                    label: 'Status',
                    data: [101, 39, 40],
                    backgroundColor: [
                        'rgba(102, 179, 255, 1)',
                        'rgba(128, 193, 255, 1)',
                        'rgba(153, 206, 255, 1)'
                    ],
                    borderWidth: 1
                    }]
                    }, 
                    options: {
                        responsive: true,
                    }
                });

var myChart = new Chart(cases, {
    type: 'bar',
    data: {
        labels: ['Assault', 'Blotter', 'Debts', 'Family Conflict', 'Trespassing', 'Burglary'],
        datasets: [{
            label: 'Cases',
            data: [30, 31, 37, 16, 30, 15],
            backgroundColor: [                
                'rgba(102, 179, 255, 1)',
                'rgba(128, 193, 255, 1)',
                'rgba(153, 206, 255, 1)',
                'rgba(179, 218, 255, 1)',
                'rgba(204, 230, 255, 1)',
                'rgba(230, 243, 255, 1)'
            ],
            }]
            }, 
            options: {
                responsive: true,
                }
            });
            
var month = document.getElementById('month').getContext('2d');            
var month = new Chart(month, {
    type: 'bar',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Sept', 'Oct', 'Nov', 'Dec'],
        datasets: [{
            label: 'Monthly Cases Record ',
            data: [8, 16, 8, 8, 16, 8, 8, 35, 52],
            backgroundColor: [                
                'rgba(102, 179, 255, 1)',
                'rgba(128, 193, 255, 1)',
                'rgba(153, 206, 255, 1)',
                'rgba(179, 218, 255, 1)',
                'rgba(204, 230, 255, 1)',
                'rgba(230, 243, 255, 1)',
                'rgba(128, 193, 255, 1)',
                'rgba(179, 218, 255, 1)',
                'rgba(204, 230, 255, 1)'
            ],
            }]
            }, 
            options: {
                responsive: true,
                }
                });