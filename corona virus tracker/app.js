const ApifyClient = require('apify-client');

// Initialize the ApifyClient with API token
const client = new ApifyClient({
    token: 'eouCAzDRNE2JiZoS5unadekP2',
});

// Prepare actor input
const input = {
    email: "zuzka@apify.com"
};

(async () => {
    // Run the actor and wait for it to finish
    const run = await client.actor("zuzka/covid-ng").call(input);

    // Fetch and print actor results from the run's dataset (if any)
    console.log('Results from dataset');
    const { items } = await client.dataset(run.defaultDatasetId).listItems();
    items.forEach((item) => {
        console.dir(item);
    });
})();
