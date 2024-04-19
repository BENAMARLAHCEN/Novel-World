
    function favorite(novel_id) {
        console.log(novel_id);
        fetch('/favorite', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({
                novel_id: novel_id,
            })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                document.getElementById(`favorite${novel_id}`).innerHTML = `
                    <button class="btn btn-icon btn-icon-sm btn-icon-primary" data-novel-id="${novel_id}" onclick="disfavorite(${novel_id})">
                        <em class="icon ni ni-heart-fill"></em>
                    </button>
                `;
            }
        });
    };
  
    function disfavorite(novel_id) {
        fetch('/favorite', {
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({
                novel_id: novel_id,
            })
        })
        .then(response => response.json())
        .then(data => {
            
            if (data.success) {
                document.getElementById(`favorite${novel_id}`).innerHTML = `
                    <button class="btn btn-icon btn-icon-sm btn-icon-primary" data-novel-id="${novel_id}" onclick="favorite(${novel_id})">
                        <em class="icon ni ni-heart"></em>
                    </button>
                `;
            }
        });
    }