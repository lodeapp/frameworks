describe('Describe runs', () => {
    it.only('Test runs', () => {
        expect(true).toBe(true)
    })
    it.todo('Test todo')
    it.todo('Test another todo')
})

describe('Describe todo', () => {
    it.todo('Test todo')
})

it.todo('Isolated todo')
