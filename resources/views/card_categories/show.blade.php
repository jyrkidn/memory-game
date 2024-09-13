<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body class="flex h-fit bg-purple-50">
    <div class="flex flex-col gap-4 w-full sm:px-6 lg:px-8">
        <div class="grow pt-4 flex justify-center items-center gap-8">
            <div
                x-data="{
                    minutes: 0,
                    seconds: 0,
                    timerInterval: null,
                    init() {
                        this.timerInterval = setInterval(() => {
                            this.seconds++;
                            if (this.seconds >= 60) {
                                this.seconds = 0;
                                this.minutes++;
                            }
                        }, 1000)
                    },
                    formatTime(time) {
                        return time.toString().padStart(2, '0');
                    }
                }"
            >
                Time: <span x-text="formatTime(minutes)"></span>:<span x-text="formatTime(seconds)"></span>
            </div>
            <div
                x-data="{ moves: 0 }"
            >
                Moves: <span x-text="moves"></span>
            </div>
        </div>
        <div class="shrink">
            <ul role="list" class="grid grid-cols-2 gap-x-1 gap-y-1 sm:grid-cols-3 lg:grid-cols-4">
                @foreach($cards as $card)
                    <x-card :image="$card->getFirstMediaUrl()" :name="$card->name" />
                @endforeach
            </ul>
        </div>
    </div>
</body>
</html>
