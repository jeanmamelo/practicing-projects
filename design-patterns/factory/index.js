import createCore from './core';

const core = createCore();

try {
    core.start();
    core.stop();
} catch (error) {
    console.log('[index] Uncaugh error!');
    console.log(error);
}