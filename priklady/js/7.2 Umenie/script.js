document.addEventListener("DOMContentLoaded", function() {
    let dropArea = document.getElementById('dropArea');
    let artImage = document.getElementById('artImage');

    dropArea.addEventListener('dragover', function(e) {
        e.preventDefault();
        dropArea.classList.add('active');
    });

    dropArea.addEventListener('dragleave', function() {
        dropArea.classList.remove('active');
    });

    dropArea.addEventListener('drop', function(e) {
        e.preventDefault();
        dropArea.classList.remove('active');
        
        let files = e.dataTransfer.files;
        if (files.length > 0) {
            handleFile(files[0]);
        }
    });

    function handleFile(file) {
        let reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onload = function() {
            artImage.src = reader.result;
            artImage.style.display = 'block';
            let points = Math.floor(Math.random() * 11);
            document.getElementById('points').textContent = points;
            displayRatingMessage(points);
        };
    }

    function displayRatingMessage(points) {
        let message;
        if (points >= 8) {
            message = "Wow! To je perfektné!";
        } else if (points >= 5) {
            message = "Dobrá práca!";
        } else {
            message = "Ujde to, videl som aj lepšie.";
        }
        document.getElementById('ratingMessage').textContent = message;
    }
});
