{!! $errors->first('rating', '<p class="red-error">:message</p>') !!}
<div class="estrellas">
    <div class="rating stars" id="reviewer_rating">
        <input type="radio" id="reviewer_rating_0" name="reviewer_rating" aria-label="0 estrellas" value="0"/>
        <input type="radio" id="reviewer_rating_1" name="reviewer_rating" aria-label="0.5 estrellas" value="0.5" />
        <input type="radio" id="reviewer_rating_2" name="reviewer_rating" aria-label="1 estrella" value="1" />
        <input type="radio" id="reviewer_rating_3" name="reviewer_rating" aria-label="1.5 estrellas" value="1.5" />
        <input type="radio" id="reviewer_rating_4" name="reviewer_rating" aria-label="2 estrellas" value="2" />
        <input type="radio" id="reviewer_rating_5" name="reviewer_rating" aria-label="2.5 estrellas" value="2.5" />
        <input type="radio" id="reviewer_rating_6" name="reviewer_rating" aria-label="3 estrellas" value="3" />
        <input type="radio" id="reviewer_rating_7" name="reviewer_rating" aria-label="3.5 estrellas" value="3.5" />
        <input type="radio" id="reviewer_rating_8" name="reviewer_rating" aria-label="4 estrellas" value="4" />
        <input type="radio" id="reviewer_rating_9" name="reviewer_rating" aria-label="4.5 estrellas" value="4.5" />
        <input type="radio" id="reviewer_rating_10" name="reviewer_rating" aria-label="5 estrellas" value="5"/>

        <label for="reviewer_rating_10">
            <span aria-hidden="true"></span>
        </label>
        <label for="reviewer_rating_9" class="half">
            <span aria-hidden="true" class="half"></span>
        </label>
        <label for="reviewer_rating_8">
            <span aria-hidden="true"></span>
        </label>
        <label for="reviewer_rating_7" class="half">
            <span aria-hidden="true" class="half"></span>
        </label>
        <label for="reviewer_rating_6">
            <span aria-hidden="true"></span>
        </label>
        <label for="reviewer_rating_5" class="half">
            <span aria-hidden="true" class="half"></span>
        </label>
        <label for="reviewer_rating_4">
            <span aria-hidden="true"></span>
        </label>
        <label for="reviewer_rating_3" class="half">
            <span aria-hidden="true" class="half"></span>
        </label>
        <label for="reviewer_rating_2">
            <span aria-hidden="true"></span>
        </label>
        <label for="reviewer_rating_1" class="half">
            <span aria-hidden="true" class="half"></span>
        </label>
    </div>
    <input type="hidden" id="star-value" name="rating" value="{{isset($data) ? $data->rating : 5}}">
</div>
@push('scripts')
    <script>
        $(document).ready(function() {
            $('#' + getStart()).trigger('click');

            function getStart() {
                let start = parseFloat($('#star-value').val());
                switch (start) {
                    case 0:
                        return 'reviewer_rating_0';
                    case 0.5:
                        return 'reviewer_rating_1';
                    case 1:
                        return 'reviewer_rating_2';
                    case 1.5:
                        return 'reviewer_rating_3';
                    case 2:
                        return 'reviewer_rating_4';
                    case 2.5:
                        return 'reviewer_rating_5';
                    case 3:
                        return 'reviewer_rating_6';
                    case 3.5:
                        return 'reviewer_rating_7';
                    case 4:
                        return 'reviewer_rating_8';
                    case 4.5:
                        return 'reviewer_rating_9';
                    case 5:
                        return 'reviewer_rating_10';
                    default:
                        return 'reviewer_rating_10';
                }
            }
        });
    </script>
@endpush
