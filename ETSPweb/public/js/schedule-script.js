// datepicker UI
$(document).ready(function () {
    $('#datepicker').datepicker({

        uiLibrary: 'bootstrap', format: 'yyyy-mm-dd'

    });
});

new Vue({
    el: '.jadwal',
    data: {
        jadwal: {
            '1': {
                'studio': 'Biasa 1',
                'label': 'A',
                'urutan': [ {'nomor':'07:00'},{'nomor':'08:00'},
                            {'nomor':'09:00'}, {'nomor':'10:00'},
                            {'nomor':'11:00'}, {'nomor':'12:00'},
                            {'nomor':'13:00'}, {'nomor':'14:00'},
                            {'nomor':'15:00'}, {'nomor':'16:00'},
                            {'nomor':'17:00'}, {'nomor':'18:00'},
                            {'nomor':'19:00'}, {'nomor':'20:00'},
                            {'nomor':'21:00'}]
            },
            '2': {
                'studio': 'Biasa 2',
                'label': 'B',
                'urutan': [ {'nomor':'07:00'},{'nomor':'08:00'},
                            {'nomor':'09:00'}, {'nomor':'10:00'},
                            {'nomor':'11:00'}, {'nomor':'12:00'},
                            {'nomor':'13:00'}, {'nomor':'14:00'},
                            {'nomor':'15:00'}, {'nomor':'16:00'},
                            {'nomor':'17:00'}, {'nomor':'18:00'},
                            {'nomor':'19:00'}, {'nomor':'20:00'},
                            {'nomor':'21:00'}]
            },
            '3': {
                'studio': 'Luxury',
                'label': 'C',
                'urutan': [ {'nomor':'07:00'},{'nomor':'08:00'},
                            {'nomor':'09:00'}, {'nomor':'10:00'},
                            {'nomor':'11:00'}, {'nomor':'12:00'},
                            {'nomor':'13:00'}, {'nomor':'14:00'},
                            {'nomor':'15:00'}, {'nomor':'16:00'},
                            {'nomor':'17:00'}, {'nomor':'18:00'},
                            {'nomor':'19:00'}, {'nomor':'20:00'},
                            {'nomor':'21:00'}]
            },
        }
    },
    methods: {
        pilihJadwal(studio, jam) {
            //cara mendapatkan nilai dari datepicker
            var date = $('#datepicker').datepicker().value();
           alert('Anda memilih studio : ' + studio + jam + '\nPada ' + date);
        }
    }
})
