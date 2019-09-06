<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Tests\Integration\Messaging\V1\Session;

use Twilio\Exceptions\DeserializeException;
use Twilio\Exceptions\TwilioException;
use Twilio\Http\Response;
use Twilio\Tests\HolodeckTestCase;
use Twilio\Tests\Request;

class ParticipantTest extends HolodeckTestCase {
    public function testCreateRequest() {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->messaging->v1->sessions("CHXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                        ->participants->create();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'post',
            'https://messaging.twilio.com/v1/Sessions/CHXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Participants'
        ));
    }

    public function testCreateIdentityResponse() {
        $this->holodeck->mock(new Response(
            201,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "service_sid": "ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "messaging_service_sid": "MGaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "session_sid": "CHaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "sid": "MBaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "identity": "Twilio",
                "attributes": "{ \\"foo\\": \\"bar\\" }",
                "date_created": "2015-12-16T22:18:37Z",
                "date_updated": "2015-12-16T22:18:38Z",
                "type": "chat",
                "twilio_address": "+111111",
                "user_address": "+999999",
                "url": "https://messaging.twilio.com/v1/Sessions/CHaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants/MBaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
            }
            '
        ));

        $actual = $this->twilio->messaging->v1->sessions("CHXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                              ->participants->create();

        $this->assertNotNull($actual);
    }

    public function testCreateAddressResponse() {
        $this->holodeck->mock(new Response(
            201,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "service_sid": "ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "messaging_service_sid": "MGaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "session_sid": "CHaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "sid": "MBaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "identity": null,
                "attributes": "{}",
                "date_created": "2016-03-24T21:05:50Z",
                "date_updated": "2016-03-24T21:05:50Z",
                "type": "chat",
                "twilio_address": "+111111",
                "user_address": "+999999",
                "url": "https://messaging.twilio.com/v1/Sessions/CHaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants/MBaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
            }
            '
        ));

        $actual = $this->twilio->messaging->v1->sessions("CHXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                              ->participants->create();

        $this->assertNotNull($actual);
    }

    public function testUpdateRequest() {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->messaging->v1->sessions("CHXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                        ->participants("MBXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->update();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'post',
            'https://messaging.twilio.com/v1/Sessions/CHXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Participants/MBXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
        ));
    }

    public function testUpdateResponse() {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "service_sid": "ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "messaging_service_sid": "MGaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "session_sid": "CHaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "sid": "MBaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "identity": "Twilio",
                "attributes": "{ \\"foo\\": \\"bar\\" }",
                "date_created": "2015-12-16T22:18:37Z",
                "date_updated": "2015-12-16T22:18:38Z",
                "type": "chat",
                "twilio_address": "+111111",
                "user_address": "+999999",
                "url": "https://messaging.twilio.com/v1/Sessions/CHaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants/MBaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
            }
            '
        ));

        $actual = $this->twilio->messaging->v1->sessions("CHXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                              ->participants("MBXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->update();

        $this->assertNotNull($actual);
    }

    public function testFetchRequest() {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->messaging->v1->sessions("CHXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                        ->participants("MBXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->fetch();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'get',
            'https://messaging.twilio.com/v1/Sessions/CHXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Participants/MBXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
        ));
    }

    public function testFetchResponse() {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "service_sid": "ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "messaging_service_sid": "MGaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "session_sid": "CHaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "sid": "MBaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "identity": "Twilio",
                "attributes": "{}",
                "date_created": "2016-03-24T21:05:50Z",
                "date_updated": "2016-03-24T21:05:50Z",
                "type": "chat",
                "twilio_address": "+111111",
                "user_address": "+999999",
                "url": "https://messaging.twilio.com/v1/Sessions/CHaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants/MBaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
            }
            '
        ));

        $actual = $this->twilio->messaging->v1->sessions("CHXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                              ->participants("MBXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->fetch();

        $this->assertNotNull($actual);
    }

    public function testReadRequest() {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->messaging->v1->sessions("CHXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                        ->participants->read();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'get',
            'https://messaging.twilio.com/v1/Sessions/CHXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Participants'
        ));
    }

    public function testReadResponse() {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "meta": {
                    "page": 0,
                    "page_size": 50,
                    "first_page_url": "https://messaging.twilio.com/v1/Sessions/CHaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants?PageSize=50&Page=0",
                    "previous_page_url": null,
                    "url": "https://messaging.twilio.com/v1/Sessions/CHaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants?PageSize=50&Page=0",
                    "next_page_url": null,
                    "key": "participants"
                },
                "participants": [
                    {
                        "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "service_sid": "ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "messaging_service_sid": "MGaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "session_sid": "CHaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "sid": "MBaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "identity": "Twilio",
                        "attributes": "{}",
                        "date_created": "2016-03-24T21:05:50Z",
                        "date_updated": "2016-03-24T21:05:50Z",
                        "type": "chat",
                        "twilio_address": "+111111",
                        "user_address": "+999999",
                        "url": "https://messaging.twilio.com/v1/Sessions/CHaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants/MBaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
                    }
                ]
            }
            '
        ));

        $actual = $this->twilio->messaging->v1->sessions("CHXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                              ->participants->read();

        $this->assertNotNull($actual);
    }

    public function testDeleteRequest() {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->messaging->v1->sessions("CHXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                        ->participants("MBXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->delete();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'delete',
            'https://messaging.twilio.com/v1/Sessions/CHXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Participants/MBXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
        ));
    }

    public function testDeleteResponse() {
        $this->holodeck->mock(new Response(
            204,
            null
        ));

        $actual = $this->twilio->messaging->v1->sessions("CHXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                              ->participants("MBXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->delete();

        $this->assertTrue($actual);
    }
}