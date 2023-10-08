function sendToDiscord(data) {
    const webhookUrl = discordWebhookUrl;

    const payload = {
        content: `**IP:** ${data.ip}\n**Mesto:** ${data.city}\n**Krajina:** ${data.country}\n**Čas:** ${data.timestamp}\n**Stránka:** ${data.page}`,
      };
    
      fetch(webhookUrl, {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify(payload),
      })
        .then((response) => {
          if (!response.ok) {
            console.error('Failed to send data to Discord:', response.status, response.statusText);
          }
        })
        .catch((error) => {
          console.error('Error sending data to Discord:', error);
        });
    }
    
    fetch('https://ipinfo.io/json')
      .then((response) => response.json())
      .then((data) => {
        const userIp = data.ip;
        const city = data.city;
        const country = data.country;
        const timestamp = new Date().toLocaleString();
        
        // Get the current URL of the page
        const page = window.location.href;
    
        const userData = { ip: userIp, city: city, country: country, timestamp: timestamp, page: page };
    
        sendToDiscord(userData);
      })
      .catch((error) => {
        console.error('Error fetching IP data:', error);
      });