import createCore from './core.js'

describe('core quando importado', () => {
    test('deve retornar os métodos #start e #stop', () => {
        const core = createCore();
        expect(core).toHaveProperty('start');
        expect(core).toHaveProperty('stop');
    });
});

describe ('core quando inicializado', () => {
    test('não deve retornar erros', () => {
        const core = createCore();
        expect(() => {
            core.start();
        }).not.toThrow();
    });
});