function updateClock() {
    const now = new Date();

    // Día de la semana
    const days = [
        "domingo", "lunes", "martes", "miércoles",
        "jueves", "viernes", "sábado"
    ];
    const dayName = days[now.getDay()].toUpperCase();

    // Fecha completa
    const dateString = now.toLocaleDateString("es-PE", {
        day: "numeric",
        month: "long",
        year: "numeric"
    });

    // Hora 12 horas con AM/PM
    let hours = now.getHours();
    const minutes = String(now.getMinutes()).padStart(2, "0");
    const seconds = String(now.getSeconds()).padStart(2, "0");
    const ampm = hours >= 12 ? "PM" : "AM";

    hours = hours % 12;
    hours = hours ? hours : 12; // Si es 0, mostrar 12

    const timeString = `${hours}:${minutes}:${seconds} ${ampm}`;

    // Mostrar en pantalla
    document.getElementById("day").textContent = dayName;
    document.getElementById("date").textContent = dateString;
    document.getElementById("clock").textContent = timeString;
}

// Actualizar cada segundo
setInterval(updateClock, 1000);
updateClock();
