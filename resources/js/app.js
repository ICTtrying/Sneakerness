  document.addEventListener("DOMContentLoaded", () => {
 
    // Check if the maintenance mode is enabled in the .env file
    const maintenance = document.body.getAttribute('data-maintenance') === 'true';
    console.log(maintenance); // kijken of het true or false

    if (maintenance) {
        const page = document.querySelector('.page');
        if (page) page.style.display = 'none';

        const maintenanceDiv = document.createElement('div');
        maintenanceDiv.style.position = 'fixed';
        maintenanceDiv.style.top = '0';
        maintenanceDiv.style.left = '0';
        maintenanceDiv.style.width = '100vw';
        maintenanceDiv.style.height = '100vh';
        maintenanceDiv.style.backgroundColor = '#000';
        maintenanceDiv.style.color = 'white';
        maintenanceDiv.style.display = 'flex';
        maintenanceDiv.style.justifyContent = 'center';
        maintenanceDiv.style.alignItems = 'center';
        maintenanceDiv.style.fontSize = '2rem';
        maintenanceDiv.style.fontFamily = "'Quicksand', sans-serif";
        maintenanceDiv.style.zIndex = '9999';
        maintenanceDiv.style.textAlign = 'center';
        maintenanceDiv.style.padding = '20px';
        maintenanceDiv.textContent = "Onze website is momenteel in onderhoud. Kom later terug.";

        document.body.appendChild(maintenanceDiv);
    }
});