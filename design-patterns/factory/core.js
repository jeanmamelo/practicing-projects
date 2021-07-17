import createDatabaseConnection from './database.js';
import createWebserver from './webserver.js';

function createCore() { // core factory
    const database = createDatabaseConnection();
    const webserver = createWebserver();

    function start() {
        console.log('> [core] Starting...');
        database.start();
        webserver.start();
        console.log('> [core] Starting done! System running!');
    }

    function stop() {
        console.log('> [core] Stopping...');
        webserver.stop();
        database.stop();
        console.log('> [core] Stopping done!');
    }

    return {
        start,
        stop
    }
}

export default createCore;