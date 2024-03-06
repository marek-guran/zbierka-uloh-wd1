const colorPicker = document.getElementById("colorPicker");

colorPicker.addEventListener("input", function () {
    const selectedColor = colorPicker.value;
    // Nastaví farbu pozadia tela
    document.body.style.backgroundColor = selectedColor;
    // Skontroluje svetlosť vybranej farby
    const luminance = getLuminance(selectedColor);
    // Nastaví farbu textu na základe svetlosti
    document.body.style.color = luminance > 0.5 ? "#000" : "#fff";
});

// Funkcia na výpočet svetlosti farby
function getLuminance(color) {
    // Konvertujte hex farbu na RGB
    let rgb = hexToRgb(color);
    // Vypočíta svetlosť
    return (0.2126 * rgb.r + 0.7152 * rgb.g + 0.0722 * rgb.b) / 255;
}

// Funkcia na konverziu hex farby na RGB
function hexToRgb(hex) {
    // Odstráni '#' z hex, ak je prítomný
    hex = hex.replace(/^#/, '');
    // Konvertujte hex na RGB
    const bigint = parseInt(hex, 16);
    return {
        r: (bigint >> 16) & 255,
        g: (bigint >> 8) & 255,
        b: bigint & 255
    };
}