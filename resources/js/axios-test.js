import axios from 'axios'

// console.log('hello!');
axios.post('/api/axios-test', {name: 'Roman Rogovets'}).then(respond => {
    // console.log(respond.data)
    document.getElementById('axios-test').innerHTML = respond.data
});
