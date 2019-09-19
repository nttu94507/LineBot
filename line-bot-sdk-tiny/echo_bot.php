<?php

/**
 * Copyright 2016 LINE Corporation
 *
 * LINE Corporation licenses this file to you under the Apache License,
 * version 2.0 (the "License"); you may not use this file except in compliance
 * with the License. You may obtain a copy of the License at:
 *
 *   https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

require_once('./LINEBotTiny.php');

$channelAccessToken = 'r6RjYZeB1s1O0OsjbNzdLp/50ozOJb5Jrcp5/X9oVzNcoYhwHqOX8u/AwzzETmLl/VJ3Rp4QBMNpCwyS0+yQmr1GPSum1CW8+XttiJacBrQ7mrdZtxHD2H4D/gG2rjye0+nusyAOJBpGFaJywwGetQdB04t89/1O/w1cDnyilFU=';
$channelSecret = 'f2effb509033986d95f16bf0da16eba8';

$client = new LINEBotTiny($channelAccessToken, $channelSecret);
foreach ($client->parseEvents() as $event) {
    switch ($event['type']) {
        case 'message':
            $message = $event['message'];
            switch ($message['type']) {
                case 'text':
                    $client->replyMessage([
                        'replyToken' => $event['replyToken'],
                        'messages' => [
                            [
                                'type' => 'text',
                                'text' => $message['text'].'FQ'
                            ]
                        ]
                    ]);
                    break;

                case 'image':
                    $client->replyMessage([
                        'replyToken' => $event['replyToken'],
                        'messages' => [
                            [
                                'type' => 'text',
                                'text' => 'FQ'
                            ]
                        ]
                    ]);
                    break;

                case 'video':
                    $client->replyMessage([
                        'replyToken' => $event['replyToken'],
                        'messages' => [
                            [
                                'type' => 'text',
                                'text' => 'FQ'
                            ]
                        ]
                    ]);
                    break;

                case 'audio':
                    $client->replyMessage([
                        'replyToken' => $event['replyToken'],
                        'messages' => [
                            [
                                'type' => 'text',
                                'text' => 'FQ'
                            ]
                        ]
                    ]);
                    break;

                case 'sticker':
                    $client->replyMessage([
                        'replyToken' => $event['replyToken'],
                        'messages' => [
                            [
                                'type' => 'text',
                                'text' => 'FQ'
                            ]
                        ]
                    ]);
                    break;
                default:
                    error_log('Unsupported message type: ' . $message['type']);
                    break;
            }
            break;
        default:
            error_log('Unsupported event type: ' . $event['type']);
            break;
    }
};
