document.addEventListener('DOMContentLoaded', () => {
    const parkingSlotsContainer = document.getElementById('parking-slots');
    const totalSlots = 20;

    for (let i = 1; i <= totalSlots; i++) {
        const slot = document.createElement('div');
        slot.className = 'col-md-3 col-sm-6 parking-slot available';
        slot.id = `slot-${i}`;
        slot.innerHTML = `
            <h5>Slot ${i}</h5>
            <button class="btn btn-light slot-btn" onclick="toggleReservation(${i})">Reserve</button>
        `;
        parkingSlotsContainer.appendChild(slot);
    }
});

function toggleReservation(slotNumber) {
    const slot = document.getElementById(`slot-${slotNumber}`);
    const button = slot.querySelector('.slot-btn');
    
    if (slot.classList.contains('available')) {
        slot.classList.remove('available');
        slot.classList.add('reserved');
        button.textContent = 'Cancel Reservation';
    } else {
        slot.classList.remove('reserved');
        slot.classList.add('available');
        button.textContent = 'Reserve';
    }
}
