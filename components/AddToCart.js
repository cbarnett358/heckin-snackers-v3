export default {
    data() {
        return {
            count: 0,
        }
    },
    template: `
        <div>
            <button @click="count++">+</button>
            <span>{{ count }}</span>
            <button @click="count--">-</button>
        </div>
    `
};