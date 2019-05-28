describe('Describe failure', () => {

    it('Test success', async () => {
        expect(true).toBe(true)
    })

    it('Test assertion failure', () => {
        expect(true).toBe(false)
    })

    it('Test error exception', () => {
        throw Error('This is a custom exception message')
    })
})
