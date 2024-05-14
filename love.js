fetch('firebaseConfig.json')
.then(response => response.json())
.then(firebaseConfig => {
    firebase.initializeApp(firebaseConfig);
    const database = firebase.database();

    const likeBtn = document.getElementById('like-btn');
    const heartCount = document.getElementById('heart-count');

    database.ref('likes').once('value').then((snapshot) => {
        const likes = snapshot.val() || 0;
        heartCount.innerText = `${likes} сердец`;
    });

    let localLikes = 0;

    likeBtn.addEventListener('click', () => {
        localLikes++;
        heartCount.innerText = `${localLikes} сердец`;

        database.ref('likes').transaction((currentLikes) => {
            return (currentLikes || 0) + 1;
        }).then((result) => {
            localLikes = result.snapshot.val();
            heartCount.innerText = `${localLikes} сердец`;
        });
    });

    database.ref('likes').on('value', (snapshot) => {
        localLikes = snapshot.val();
        heartCount.innerText = `${localLikes} сердец`;
    });
})
.catch(error => {
    console.error('Error fetching Firebase config:', error);
});