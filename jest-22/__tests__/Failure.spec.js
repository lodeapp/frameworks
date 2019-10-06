describe('Describe failure', () => {

    it('Test success', async () => {
        expect(true).toBe(true)
    })

    it('Test error exception', () => {
        throw Error('This is a custom exception message')
    })

    it('Test boolean diff', () => {
        expect(true).toBe(false)
    })

    it('Test string diff', () => {
        expect('Hobnobs').toBe('Digestives')
    })

    it('Test number diff', () => {
        expect(42).toBe(11)
    })

    it('Test array diff', () => {
        expect(['Hobnobs', 'Digestives', 'Jaffa Cakes']).toEqual(['Rich Tea'])
    })

    it('Test object diff', () => {
        expect({ biscuit: ['Hobnobs', 'Digestives'] }).toEqual({ bread: 'Banana' })
    })
})
