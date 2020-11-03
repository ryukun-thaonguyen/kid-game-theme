// fetch api to confirm the game is finished

console.log('checking..');
async function postData(url = '', data = {}) {
    const response = await fetch(url, {
        method: 'POST',
        mode: 'cors',
        cache: 'no-cache',
        credentials: 'same-origin',
        headers: {
            'Content-Type': 'application/json'
        },
        redirect: 'follow',
        referrerPolicy: 'no-referrer',
        body: JSON.stringify(data)
    });
    return response.json();
}

// postData('https://d80c565aab2262d49e73a3d31f4bf3da.m.pipedream.net', { isFinished: true }).
// then(data => console.log(data));